/**
 * Serializes block nodes into WordPress block markup, deriving the inner
 * HTML classes and inline styles from attributes the way block supports do.
 */

const IMG_URI = '<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/';

export function presetToCss(v) {
  if (typeof v !== 'string') return v;
  const m = v.match(/^var:preset\|([a-z-]+)\|([a-z0-9-]+)$/);
  return m ? `var(--wp--preset--${m[1]}--${m[2]})` : v;
}

/** Classes shared by block supports (color, font size, font family, border color). */
function supportClasses(attrs, { fontSizeCustomFlag = false } = {}) {
  const c = [];
  if (attrs.align) c.push(`align${attrs.align}`);
  if (attrs.className) c.push(attrs.className);
  if (attrs.textColor) c.push(`has-${attrs.textColor}-color`, 'has-text-color');
  if (attrs.backgroundColor) c.push(`has-${attrs.backgroundColor}-background-color`, 'has-background');
  if (attrs.borderColor) c.push('has-border-color', `has-${attrs.borderColor}-border-color`);
  if (attrs.fontSize) { if (fontSizeCustomFlag) c.push('has-custom-font-size'); c.push(`has-${attrs.fontSize}-font-size`); }
  if (attrs.fontFamily) c.push(`has-${attrs.fontFamily}-font-family`);
  return c;
}

/** Inline style declarations from the `style` attribute object. */
function supportStyles(style = {}) {
  const s = [];
  const b = style.border ?? {};
  if (b.width) s.push(`border-width:${b.width}`);
  if (b.radius && typeof b.radius === 'string') s.push(`border-radius:${b.radius}`);
  if (b.radius && typeof b.radius === 'object') {
    for (const [k, v] of Object.entries(b.radius)) s.push(`border-${k.replace(/([A-Z])/g, '-$1').toLowerCase()}-radius:${v}`);
  }
  if (style.dimensions?.minHeight) s.push(`min-height:${style.dimensions.minHeight}`);
  for (const prop of ['margin', 'padding']) {
    const box = style.spacing?.[prop];
    if (!box) continue;
    for (const side of ['top', 'right', 'bottom', 'left']) if (box[side] !== undefined) s.push(`${prop}-${side}:${presetToCss(box[side])}`);
  }
  const t = style.typography ?? {};
  if (t.fontSize) s.push(`font-size:${t.fontSize}`);
  if (t.fontStyle) s.push(`font-style:${t.fontStyle}`);
  if (t.fontWeight) s.push(`font-weight:${t.fontWeight}`);
  if (t.lineHeight) s.push(`line-height:${t.lineHeight}`);
  if (t.textTransform) s.push(`text-transform:${t.textTransform}`);
  if (t.letterSpacing) s.push(`letter-spacing:${t.letterSpacing}`);
  if (style.shadow) s.push(`box-shadow:${presetToCss(style.shadow)}`);
  return s;
}

function attrStr(classes, styles) {
  let out = '';
  if (classes.length) out += ` class="${classes.join(' ')}"`;
  if (styles.length) out += ` style="${styles.join(';')}"`;
  return out;
}

function comment(name, attrs, selfClose = false) {
  const short = name.replace(/^core\//, '');
  const json = attrs && Object.keys(attrs).length ? ' ' + JSON.stringify(attrs) : '';
  return `<!-- wp:${short}${json} ${selfClose ? '/' : ''}-->`;
}

function closeComment(name) {
  return `<!-- /wp:${name.replace(/^core\//, '')} -->`;
}

/** Serialize a block node tree at a given indent depth. Returns an array of lines. */
export function serializeNode(node, depth = 0) {
  const tab = '\t'.repeat(depth);
  const inner = '\t'.repeat(depth + 1);
  const { name, attrs = {} } = node;
  const lines = [];
  const childLines = () => (node.children ?? []).flatMap((c) => serializeNode(c, depth + 1));

  switch (name) {
    case 'core/group': {
      const tag = attrs.tagName ?? 'div';
      const classes = ['wp-block-group', ...supportClasses(attrs)];
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<${tag}${attrStr(classes, supportStyles(attrs.style))}>`);
      lines.push(...childLines());
      lines.push(`${inner}</${tag}>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/columns': {
      const classes = ['wp-block-columns', ...supportClasses(attrs)];
      if (attrs.verticalAlignment) classes.push(`are-vertically-aligned-${attrs.verticalAlignment}`);
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<div${attrStr(classes, supportStyles(attrs.style))}>`);
      lines.push(...childLines());
      lines.push(`${inner}</div>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/column': {
      const classes = ['wp-block-column', ...supportClasses(attrs)];
      if (attrs.verticalAlignment) classes.push(`is-vertically-aligned-${attrs.verticalAlignment}`);
      const styles = supportStyles(attrs.style);
      if (attrs.width) styles.push(`flex-basis:${attrs.width}`);
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<div${attrStr(classes, styles)}>`);
      lines.push(...childLines());
      lines.push(`${inner}</div>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/buttons': {
      const classes = ['wp-block-buttons', ...supportClasses(attrs)];
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<div${attrStr(classes, supportStyles(attrs.style))}>`);
      lines.push(...childLines());
      lines.push(`${inner}</div>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/button': {
      const classes = ['wp-block-button'];
      if (attrs.width) classes.push('has-custom-width', `wp-block-button__width-${attrs.width}`);
      // Button block puts color classes on the inner link; the wrapper carries className + font size.
      const { textColor, backgroundColor, borderColor, ...wrapperAttrs } = attrs;
      classes.push(...supportClasses(wrapperAttrs, { fontSizeCustomFlag: true }));
      const linkClasses = ['wp-block-button__link'];
      const linkAttrs = { textColor, backgroundColor, borderColor };
      linkClasses.push(...supportClasses(linkAttrs), 'wp-element-button');
      const href = attrs.url ? ` href="${attrs.url}"` : '';
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<div${attrStr(classes, [])}><a${attrStr(linkClasses, supportStyles(attrs.style))}${href}>${node.inner}</a></div>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/paragraph': {
      const classes = [];
      if (attrs.align) classes.push(`has-text-align-${attrs.align}`);
      const { align, ...rest } = attrs;
      classes.push(...supportClasses(rest));
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<p${attrStr(classes, supportStyles(attrs.style))}>${node.inner}</p>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/heading': {
      const level = attrs.level ?? 2;
      const classes = ['wp-block-heading'];
      if (attrs.textAlign) classes.push(`has-text-align-${attrs.textAlign}`);
      classes.push(...supportClasses(attrs));
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<h${level}${attrStr(classes, supportStyles(attrs.style))}>${node.inner}</h${level}>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/image': {
      const classes = ['wp-block-image'];
      if (attrs.align) classes.push(`align${attrs.align}`);
      classes.push(`size-${attrs.sizeSlug ?? 'full'}`);
      if (attrs.width || attrs.height) classes.push('is-resized');
      if (attrs.style?.border) classes.push('has-custom-border');
      if (attrs.className) classes.push(attrs.className);
      const imgStyles = [];
      if (attrs.style?.border?.radius) imgStyles.push(`border-radius:${attrs.style.border.radius}`);
      if (attrs.aspectRatio) imgStyles.push(`aspect-ratio:${attrs.aspectRatio}`, `object-fit:${attrs.scale ?? 'cover'}`);
      if (attrs.width) imgStyles.push(`width:${attrs.width}`);
      if (attrs.height) imgStyles.push(`height:${attrs.height}`);
      const alt = node.alt ? `<?php esc_attr_e( '${node.alt.replace(/'/g, "\\'")}', 'ollie' ); ?>` : '';
      const styleAttr = imgStyles.length ? ` style="${imgStyles.join(';')}"` : '';
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<figure class="${classes.join(' ')}"><img src="${IMG_URI}${node.src}" alt="${alt}"${styleAttr}/></figure>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/list': {
      const tag = node.ordered ? 'ol' : 'ul';
      const classes = ['wp-block-list', ...supportClasses(attrs)];
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<${tag}${attrStr(classes, supportStyles(attrs.style))}>`);
      lines.push(...childLines());
      lines.push(`${inner}</${tag}>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/list-item': {
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<li>${node.inner}</li>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/quote': {
      const classes = ['wp-block-quote', ...supportClasses(attrs)];
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<blockquote${attrStr(classes, supportStyles(attrs.style))}>`);
      lines.push(...childLines());
      if (node.cite) lines.push(`${inner}<cite>${node.cite}</cite>`);
      lines.push(`${inner}</blockquote>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    case 'core/separator': {
      lines.push(`${tab}${comment(name, attrs)}`);
      lines.push(`${inner}<hr class="wp-block-separator has-alpha-channel-opacity"/>`);
      lines.push(`${tab}${closeComment(name)}`);
      return lines;
    }
    default:
      throw new Error(`No serializer for block "${name}" (data-block can only target blocks the dialect knows)`);
  }
}

export function patternHeader(meta) {
  const line = (k, v = '') => ` * ${k}:${v ? ' ' + v : ''}`;
  return [
    '<?php',
    '/**',
    line('Title', meta.Title),
    line('Slug', meta.Slug),
    line('Description', meta.Description),
    line('Categories', meta.Categories),
    line('Keywords', meta.Keywords),
    line('Viewport Width', meta['Viewport Width'] ?? '1500'),
    line('Block Types', meta['Block Types']),
    line('Post Types', meta['Post Types']),
    line('Inserter', meta.Inserter ?? 'true'),
    ' */',
    '?>',
  ].join('\n');
}

export function serializePattern(meta, rootNode) {
  return patternHeader(meta) + '\n' + serializeNode(rootNode, 0).join('\n') + '\n';
}

/**
 * Turns pattern PHP into plain block markup (for inserting into a post via the
 * REST API / Abilities): resolves esc_html_e/esc_attr_e strings and the theme URI.
 */
export function phpToMarkup(php, baseUrl) {
  const unq = (s) => s.replace(/\\'/g, "'");
  const esc = (s) => s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  return php
    .replace(/^<\?php\n\/\*\*[\s\S]*?\*\/\n\?>\n/, '')
    .replace(/<\?php echo esc_url\( get_template_directory_uri\(\) \); \?>/g, baseUrl.replace(/\/$/, ''))
    .replace(/<\?php esc_html_e\( '((?:\\'|[^'])*)', 'ollie' \); \?>/g, (_, s) => esc(unq(s)))
    .replace(/<\?php esc_attr_e\( '((?:\\'|[^'])*)', 'ollie' \); \?>/g, (_, s) => esc(unq(s)).replace(/"/g, '&quot;'));
}
