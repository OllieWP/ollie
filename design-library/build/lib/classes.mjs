/**
 * Translates the token-constrained Tailwind class list on an element into a
 * neutral "props" object. Mappers turn props into block attributes.
 * Every class must resolve; unknown classes are collected as errors.
 */
import { BUTTON_STYLES } from './tokens.mjs';

const SIDES = { p: 'padding', m: 'margin' };
const DIRS = {
  '': ['top', 'right', 'bottom', 'left'],
  x: ['left', 'right'],
  y: ['top', 'bottom'],
  t: ['top'],
  r: ['right'],
  b: ['bottom'],
  l: ['left'],
};
const FRACTIONS = { '1/2': '50%', '1/3': '33.33%', '2/3': '66.66%', '1/4': '25%', '3/4': '75%', '2/5': '40%', '3/5': '60%' };

export function parseClasses(classes, tokens) {
  const p = { padding: {}, margin: {}, layout: {}, flags: new Set() };
  const errors = [];
  let m;

  for (const c of classes) {
    // ---- structural roles
    if (['columns', 'column', 'buttons', 'btn'].includes(c)) { p.role = c; continue; }
    if ((m = c.match(/^btn-(brand-alt|brand|dark|light|tint)$/))) { p.role = 'btn'; p.buttonStyle = BUTTON_STYLES[m[1]]; continue; }

    // ---- layout
    if (c === 'flex') { p.layout.type = 'flex'; continue; }
    if (c === 'flex-col') { p.layout.type = 'flex'; p.layout.orientation = 'vertical'; continue; }
    if (c === 'flex-wrap') { p.layout.type = 'flex'; p.layout.flexWrap = 'wrap'; continue; }
    if (c === 'grid') { p.layout.type = 'grid'; continue; }
    if ((m = c.match(/^grid-cols-(\d)$/))) { p.layout.type = 'grid'; p.layout.cols = Number(m[1]); continue; }
    if (c === 'grid-fixed') { p.layout.type = 'grid'; p.layout.fixed = true; continue; }
    if ((m = c.match(/^items-(start|center|end|stretch)$/))) { p.items = m[1]; continue; }
    if ((m = c.match(/^justify-(start|center|end|between|stretch)$/))) { p.justify = m[1]; continue; }
    if ((m = c.match(/^text-(left|center|right)$/))) { p.textAlign = m[1]; continue; }
    if (c === 'max-w-wide') { p.align = 'wide'; continue; }
    if (c === 'max-w-full') { p.align = 'full'; continue; }
    if (c === 'max-w-content') { continue; }
    if (c === 'w-full') { p.widthFull = true; continue; }
    if ((m = c.match(/^w-(\d\/\d)$/)) && FRACTIONS[m[1]]) { p.width = FRACTIONS[m[1]]; continue; }
    if ((m = c.match(/^w-\[(\d+px)\]$/))) { p.pxWidth = m[1]; continue; }
    if ((m = c.match(/^h-\[(\d+px)\]$/))) { p.pxHeight = m[1]; continue; }
    if (c === 'min-h-full') { p.minHeightFull = true; continue; }
    if (c === 'mx-auto') { continue; }

    // ---- color
    if ((m = c.match(/^bg-(.+)$/)) && tokens.colors[m[1]]) { p.background = m[1]; continue; }
    if ((m = c.match(/^text-(.+)$/)) && tokens.colors[m[1]]) { p.textColor = m[1]; continue; }
    if ((m = c.match(/^border-(.+)$/)) && tokens.colors[m[1]]) { p.borderColor = m[1]; p.border = true; continue; }
    if (c === 'border') { p.border = true; continue; }

    // ---- typography
    if ((m = c.match(/^text-(.+)$/)) && tokens.fontSizes[m[1]] && m[1] !== 'base') { p.fontSize = m[1]; continue; }
    if ((m = c.match(/^font-(.+)$/)) && tokens.fontFamilies[m[1]]) { p.fontFamily = m[1]; continue; }
    if ((m = c.match(/^font-(.+)$/)) && tokens.fontWeights[m[1]] !== undefined) { p.fontWeight = String(tokens.fontWeights[m[1]]); continue; }
    if ((m = c.match(/^leading-(.+)$/)) && tokens.lineHeights[m[1]] !== undefined) { p.lineHeight = String(tokens.lineHeights[m[1]]); continue; }
    if (c === 'uppercase') { p.textTransform = 'uppercase'; continue; }
    if (c === 'italic') { p.fontStyle = 'italic'; continue; }

    // ---- spacing
    if ((m = c.match(/^([pm])([xytrbl]?)-(.+)$/)) && tokens.spacing[m[3]]) {
      for (const d of DIRS[m[2]]) p[SIDES[m[1]]][d] = `var:preset|spacing|${m[3]}`;
      continue;
    }
    if ((m = c.match(/^([pm])([xytrbl]?)-0$/))) {
      for (const d of DIRS[m[2]]) p[SIDES[m[1]]][d] = '0';
      continue;
    }
    if ((m = c.match(/^gap-(.+)$/)) && tokens.spacing[m[1]]) { p.gap = `var:preset|spacing|${m[1]}`; continue; }
    if (c === 'gap-0') { p.gap = '0'; continue; }

    // ---- surface
    if (c === 'rounded-card') { p.radius = tokens.radius.card; continue; }
    if (c === 'rounded-full') { p.roundedFull = true; continue; }
    if ((m = c.match(/^shadow-(.+)$/)) && tokens.shadows[m[1]]) { p.shadow = `var:preset|shadow|${m[1]}`; continue; }

    errors.push(`unknown class "${c}"`);
  }
  return { props: p, errors };
}
