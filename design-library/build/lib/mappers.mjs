/**
 * Maps parsed HTML elements to block nodes: { name, attrs, children, inner }.
 * `inner` is the escaped inline HTML for text blocks. Structure comes from
 * tags, style from classes (via parseClasses). Unmapped tags/classes are
 * reported as errors, never guessed.
 */
import { parseClasses } from './classes.mjs';
import { INLINE_TAGS } from './parse.mjs';
import { PAIRED_TEXT } from './tokens.mjs';

const GRID_MIN_WIDTH = { 2: '24rem', 3: '18rem', 4: '14rem', 5: '12rem', 6: '10rem' };
const HEADINGS = { h1: 1, h2: 2, h3: 3, h4: 4, h5: 5, h6: 6 };

export class Mapper {
  constructor(tokens, meta) {
    this.tokens = tokens;
    this.meta = meta;
    this.errors = [];
    this.isRoot = true;
  }

  err(el, msg) {
    this.errors.push({ line: el.line, message: msg });
  }

  props(el) {
    const { props, errors } = parseClasses(el.classes, this.tokens);
    for (const e of errors) this.err(el, e);
    return props;
  }

  /** Merge a data-block override into a block node (hybrid escape hatch). */
  applyOverride(el, node) {
    if (!el.attrs['data-block']) return node;
    let o;
    try { o = JSON.parse(el.attrs['data-block']); } catch (e) { this.err(el, `data-block is not valid JSON: ${e.message}`); return node; }
    if (o.name) node.name = o.name;
    if (o.attrs) node.attrs = deepMerge(node.attrs, o.attrs);
    return node;
  }

  map(el) {
    const root = this.isRoot;
    this.isRoot = false;
    let node;
    switch (el.tag) {
      case 'section': node = this.section(el); break;
      case 'div': node = this.div(el); break;
      case 'p': node = this.paragraph(el); break;
      case 'img': node = this.image(el); break;
      case 'a': node = this.button(el); break;
      case 'ul': case 'ol': node = this.list(el); break;
      case 'blockquote': node = this.quote(el); break;
      case 'hr': node = { name: 'core/separator', attrs: {} }; break;
      default:
        if (HEADINGS[el.tag]) { node = this.heading(el); break; }
        this.err(el, `unmapped <${el.tag}>`);
        return null;
    }
    if (!node) return null;
    node = this.applyOverride(el, node);
    if (root) {
      const metadata = { name: this.meta.Title };
      if (this.meta.Categories) metadata.categories = this.meta.Categories.split(',').map((s) => s.trim()).filter(Boolean);
      metadata.patternName = this.meta.Slug;
      node.attrs = { metadata, ...node.attrs };
    } else if (el.attrs['data-name']) {
      node.attrs = { metadata: { name: el.attrs['data-name'] }, ...node.attrs };
    }
    return node;
  }

  children(el) {
    const out = [];
    for (const c of el.children) {
      if (c.type === 'text') {
        if (c.value.trim()) this.err(el, `stray text "${c.value.trim().slice(0, 30)}" — wrap it in <p>`);
        continue;
      }
      const n = this.map(c);
      if (n) out.push(n);
    }
    return out;
  }

  // ---------- shared attribute builders ----------

  /** Color + typography + spacing + border attrs common to most blocks. */
  styleAttrs(p, { pairText = false } = {}) {
    const attrs = {};
    const style = {};

    const border = {};
    if (p.border) border.width = '1px';
    if (p.radius) border.radius = p.radius;
    if (Object.keys(border).length) style.border = border;
    if (p.minHeightFull) style.dimensions = { minHeight: '100%' };
    const spacing = {};
    if (Object.keys(p.margin).length) spacing.margin = orderSides(p.margin);
    if (Object.keys(p.padding).length) spacing.padding = orderSides(p.padding);
    if (p.gap) spacing.blockGap = p.gap;
    if (Object.keys(spacing).length) style.spacing = spacing;
    const typo = {};
    if (p.fontWeight) { typo.fontStyle = p.fontStyle ?? 'normal'; typo.fontWeight = p.fontWeight; }
    else if (p.fontStyle) typo.fontStyle = p.fontStyle;
    if (p.lineHeight) typo.lineHeight = p.lineHeight;
    if (p.textTransform) typo.textTransform = p.textTransform;
    if (Object.keys(typo).length) style.typography = typo;
    if (p.shadow) style.shadow = p.shadow;
    if (Object.keys(style).length) attrs.style = style;
    // WordPress serializes `style` before the preset color/typography attributes.
    if (p.background) attrs.backgroundColor = p.background;
    const text = p.textColor ?? (pairText && p.background ? PAIRED_TEXT[p.background] : null);
    if (text) attrs.textColor = text;
    if (p.borderColor) attrs.borderColor = p.borderColor;
    if (p.fontSize) attrs.fontSize = p.fontSize;
    if (p.fontFamily) attrs.fontFamily = p.fontFamily;
    return attrs;
  }

  layoutAttrs(p, el) {
    const l = p.layout;
    if (l.type === 'flex') {
      const vertical = l.orientation === 'vertical';
      const out = { type: 'flex' };
      if (!vertical) out.flexWrap = l.flexWrap ?? 'nowrap';
      if (vertical) out.orientation = 'vertical';
      // Horizontal flex: justify = main axis (justifyContent), items = cross axis (verticalAlignment).
      // Vertical flex: WordPress swaps them.
      const main = { start: 'left', center: 'center', end: 'right', between: 'space-between', stretch: 'stretch' };
      const cross = { start: 'top', center: 'center', end: 'bottom', stretch: 'stretch' };
      if (vertical) {
        // CSS flex-col stretches children by default; WordPress defaults to flex-start, so say stretch explicitly.
        out.justifyContent = p.items ? main[p.items] : 'stretch';
        if (p.justify) out.verticalAlignment = p.justify === 'between' ? 'space-between' : cross[p.justify];
      } else {
        if (p.justify) out.justifyContent = main[p.justify];
        if (p.items) out.verticalAlignment = cross[p.items];
      }
      return out;
    }
    if (l.type === 'grid') {
      if (l.fixed) {
        if (!l.cols) this.err(el, 'grid-fixed needs grid-cols-N');
        return { type: 'grid', columnCount: l.cols ?? 3 };
      }
      return { type: 'grid', minimumColumnWidth: GRID_MIN_WIDTH[l.cols ?? 3] };
    }
    return { type: 'constrained' };
  }

  // ---------- element mappers ----------

  section(el) {
    const p = this.props(el);
    if (!Object.keys(p.padding).length) {
      p.padding = { top: 'var:preset|spacing|xx-large', right: 'var:preset|spacing|medium', bottom: 'var:preset|spacing|xx-large', left: 'var:preset|spacing|medium' };
    }
    if (!p.margin.top) p.margin.top = '0px';
    const attrs = { tagName: 'section', align: 'full', ...this.styleAttrs(p, { pairText: true }), layout: { inherit: true, type: 'constrained' } };
    return { name: 'core/group', attrs, children: this.children(el) };
  }

  div(el) {
    const p = this.props(el);
    if (p.role === 'columns') return this.columns(el, p);
    if (p.role === 'column') return this.column(el, p);
    if (p.role === 'buttons') return this.buttons(el, p);
    const attrs = {};
    if (p.align) attrs.align = p.align;
    Object.assign(attrs, this.styleAttrs(p, { pairText: true }));
    attrs.layout = this.layoutAttrs(p, el);
    return { name: 'core/group', attrs, children: this.children(el) };
  }

  columns(el, p) {
    const attrs = {};
    if (p.items && p.items !== 'stretch') attrs.verticalAlignment = { start: 'top', center: 'center', end: 'bottom' }[p.items];
    if (p.align) attrs.align = p.align;
    const s = this.styleAttrs(p, { pairText: true });
    if (p.gap) s.style.spacing.blockGap = { top: p.gap, left: p.gap };
    Object.assign(attrs, s);
    const children = [];
    for (const c of el.children) {
      if (c.type === 'text') { if (c.value.trim()) this.err(el, 'stray text inside .columns'); continue; }
      if (c.tag !== 'div' || !c.classes.includes('column')) { this.err(c, '.columns children must be div.column'); continue; }
      const col = this.map(c);
      // The editor propagates the columns' vertical alignment to each column.
      if (attrs.verticalAlignment && !col.attrs.verticalAlignment) col.attrs = { verticalAlignment: attrs.verticalAlignment, ...col.attrs };
      children.push(col);
    }
    return { name: 'core/columns', attrs, children };
  }

  column(el, p) {
    const attrs = {};
    if (p.items && p.items !== 'stretch') attrs.verticalAlignment = { start: 'top', center: 'center', end: 'bottom' }[p.items];
    if (p.width) attrs.width = p.width;
    Object.assign(attrs, this.styleAttrs(p, { pairText: true }));
    if (p.layout.type) attrs.layout = this.layoutAttrs(p, el);
    return { name: 'core/column', attrs, children: this.children(el) };
  }

  buttons(el, p) {
    const attrs = {};
    const s = this.styleAttrs(p);
    if (!p.gap) { s.style = s.style ?? {}; s.style.spacing = { ...(s.style.spacing ?? {}), blockGap: 'var:preset|spacing|small' }; }
    Object.assign(attrs, s);
    const justify = { start: 'left', center: 'center', end: 'right', between: 'space-between' }[p.justify ?? 'start'];
    attrs.layout = { type: 'flex', justifyContent: justify };
    const children = [];
    for (const c of el.children) {
      if (c.type === 'text') { if (c.value.trim()) this.err(el, 'stray text inside .buttons'); continue; }
      if (c.tag !== 'a') { this.err(c, '.buttons children must be <a>'); continue; }
      children.push(this.button(c));
    }
    return { name: 'core/buttons', attrs, children };
  }

  button(el) {
    const p = this.props(el);
    if (p.role !== 'btn') this.err(el, '<a> outside a paragraph must have a btn class (btn, btn-brand, btn-light, btn-dark, btn-tint, btn-brand-alt)');
    const attrs = {};
    if (el.attrs.href && el.attrs.href !== '#') attrs.url = el.attrs.href;
    if (p.widthFull) attrs.width = 100;
    if (p.buttonStyle) attrs.className = p.buttonStyle;
    Object.assign(attrs, this.styleAttrs(p));
    return { name: 'core/button', attrs, inner: this.inline(el) };
  }

  paragraph(el) {
    const p = this.props(el);
    const attrs = {};
    if (p.textAlign) attrs.align = p.textAlign;
    Object.assign(attrs, this.styleAttrs(p));
    return { name: 'core/paragraph', attrs, inner: this.inline(el) };
  }

  heading(el) {
    const p = this.props(el);
    const attrs = {};
    if (p.textAlign) attrs.textAlign = p.textAlign;
    const level = HEADINGS[el.tag];
    if (level !== 2) attrs.level = level;
    Object.assign(attrs, this.styleAttrs(p));
    return { name: 'core/heading', attrs, inner: this.inline(el) };
  }

  image(el) {
    const p = this.props(el);
    const src = el.attrs.src ?? '';
    if (!src) this.err(el, '<img> needs a src');
    const m = src.match(/(?:^|\/)patterns\/images\/([^/"']+)$/);
    if (!m) this.err(el, `<img src="${src}"> must point into patterns/images/`);
    const attrs = {};
    if (p.pxWidth) attrs.width = p.pxWidth;
    if (p.pxHeight) attrs.height = p.pxHeight;
    attrs.sizeSlug = 'full';
    attrs.linkDestination = 'none';
    if (p.align) attrs.align = p.align;
    if (p.roundedFull) attrs.className = 'is-style-rounded-full';
    const s = this.styleAttrs(p);
    if (s.style) attrs.style = s.style;
    return { name: 'core/image', attrs, src: m ? m[1] : src, alt: el.attrs.alt ?? '' };
  }

  list(el) {
    const p = this.props(el);
    const attrs = {};
    if (el.tag === 'ol') attrs.ordered = true;
    Object.assign(attrs, this.styleAttrs(p));
    const children = [];
    for (const c of el.children) {
      if (c.type === 'text') { if (c.value.trim()) this.err(el, 'stray text inside list'); continue; }
      if (c.tag !== 'li') { this.err(c, 'list children must be <li>'); continue; }
      children.push({ name: 'core/list-item', attrs: {}, inner: this.inline(c) });
    }
    return { name: 'core/list', attrs, children, ordered: el.tag === 'ol' };
  }

  quote(el) {
    const p = this.props(el);
    const attrs = this.styleAttrs(p);
    const children = [];
    let cite = null;
    for (const c of el.children) {
      if (c.type === 'text') { if (c.value.trim()) this.err(el, 'stray text inside blockquote — wrap in <p>'); continue; }
      if (c.tag === 'cite') { cite = this.inline(c); continue; }
      const n = this.map(c);
      if (n) children.push(n);
    }
    return { name: 'core/quote', attrs, children, cite };
  }

  /** Escaped inline HTML for a text block. Text nodes become esc_html_e() calls. */
  inline(el) {
    let out = '';
    const walk = (node) => {
      if (node.type === 'text') { out += escapeText(node.value); return; }
      if (!INLINE_TAGS.has(node.tag)) { this.err(node, `<${node.tag}> is not allowed inside <${el.tag}>`); return; }
      if (node.tag === 'br') { out += '<br>'; return; }
      const attrs = Object.entries(node.attrs).filter(([k]) => k !== 'class').map(([k, v]) => ` ${k}="${v}"`).join('');
      out += `<${node.tag}${attrs}>`;
      node.children.forEach(walk);
      out += `</${node.tag}>`;
    };
    el.children.forEach(walk);
    return out.trim();
  }
}

export function escapeText(text, fn = 'esc_html_e') {
  const collapsed = text.replace(/\s+/g, ' ');
  const trimmed = collapsed.trim();
  if (!trimmed) return collapsed ? ' ' : '';
  const lead = collapsed.startsWith(' ') ? ' ' : '';
  const trail = collapsed.endsWith(' ') ? ' ' : '';
  return `${lead}<?php ${fn}( '${trimmed.replace(/'/g, "\\'")}', 'ollie' ); ?>${trail}`;
}

function orderSides(obj) {
  const out = {};
  for (const k of ['top', 'right', 'bottom', 'left']) if (obj[k] !== undefined) out[k] = obj[k];
  return out;
}

function deepMerge(a, b) {
  const out = { ...a };
  for (const [k, v] of Object.entries(b)) {
    out[k] = v && typeof v === 'object' && !Array.isArray(v) && out[k] && typeof out[k] === 'object' ? deepMerge(out[k], v) : v;
  }
  return out;
}
