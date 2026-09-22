/**
 * Parses a design HTML file into front matter + a simplified element tree.
 */
import { parseFragment } from 'parse5';

export class ConvertError extends Error {
  constructor(message, line) {
    super(message);
    this.line = line;
  }
}

/** Reads the leading `<!-- Key: value -->` comment into an object. */
export function parseFrontMatter(html) {
  const m = html.match(/<!--([\s\S]*?)-->/);
  if (!m) throw new ConvertError('Missing front-matter comment (Title, Slug, Categories, ...)', 1);
  const meta = {};
  for (const raw of m[1].split('\n')) {
    const line = raw.trim();
    if (!line) continue;
    const idx = line.indexOf(':');
    if (idx === -1) throw new ConvertError(`Bad front-matter line: "${line}"`, 1);
    meta[line.slice(0, idx).trim()] = line.slice(idx + 1).trim();
  }
  for (const key of ['Title', 'Slug']) {
    if (!meta[key]) throw new ConvertError(`Front matter is missing "${key}"`, 1);
  }
  return meta;
}

const SKIP_TAGS = new Set(['head', 'script', 'style', 'link', 'meta', 'title']);

function simplify(node) {
  if (node.nodeName === '#text') {
    return { type: 'text', value: node.value, line: node.sourceCodeLocation?.startLine };
  }
  if (node.nodeName === '#comment') return null;
  if (!node.tagName) return null;
  if (SKIP_TAGS.has(node.tagName)) return null;
  const attrs = Object.fromEntries((node.attrs ?? []).map((a) => [a.name, a.value]));
  const classes = (attrs.class ?? '').split(/\s+/).filter(Boolean);
  const children = (node.childNodes ?? []).map(simplify).filter(Boolean);
  return {
    type: 'element',
    tag: node.tagName,
    attrs,
    classes,
    children,
    line: node.sourceCodeLocation?.startLine,
  };
}

/** Elements that carry only inline formatting and are kept as HTML inside text blocks. */
export const INLINE_TAGS = new Set(['strong', 'em', 'b', 'i', 'a', 'span', 'br', 'code', 'mark', 'sup', 'sub', 'cite']);

/** Returns the single root element of the design (ignores whitespace and <html>/<body> wrappers). */
export function parseDesign(html) {
  const meta = parseFrontMatter(html);
  const frag = parseFragment(html, { sourceCodeLocationInfo: true });
  let nodes = frag.childNodes.map(simplify).filter(Boolean);
  // Unwrap html/body wrappers if the file is a full document.
  const unwrap = (list) => {
    const els = list.filter((n) => n.type === 'element');
    if (els.length === 1 && (els[0].tag === 'html' || els[0].tag === 'body')) return unwrap(els[0].children);
    return list;
  };
  nodes = unwrap(nodes);
  const roots = nodes.filter((n) => n.type === 'element' || (n.type === 'text' && n.value.trim()));
  if (roots.length !== 1 || roots[0].type !== 'element') {
    throw new ConvertError(`Design must have exactly one root element, found ${roots.length}`, roots[0]?.line ?? 1);
  }
  return { meta, root: roots[0] };
}
