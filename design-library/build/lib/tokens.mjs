/**
 * Loads Ollie design tokens from theme.json.
 * Shared by gen-tokens.mjs (Tailwind @theme output) and the converter (class validation).
 */
import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
export const THEME_ROOT = path.resolve(__dirname, '../../..');

export const RADIUS = { card: '5px' };

/** Text color to pair with a background, per Ollie pairing rules. `null` = leave default. */
export const PAIRED_TEXT = {
  primary: 'primary-accent',
  'primary-accent': 'primary',
  'primary-alt': 'primary-alt-accent',
  'primary-alt-accent': 'primary-alt',
  main: 'base',
  'main-accent': 'main',
  secondary: 'base',
  base: null,
  tertiary: null,
  'border-light': null,
  'border-dark': null,
};

/** Button style slugs (core/button block styles registered by the theme). */
export const BUTTON_STYLES = {
  brand: 'is-style-button-brand',
  'brand-alt': 'is-style-button-brand-alt',
  dark: 'is-style-button-dark',
  light: 'is-style-button-light',
  tint: 'is-style-secondary-button',
};

export function loadTokens(themeJsonPath = path.join(THEME_ROOT, 'theme.json')) {
  const t = JSON.parse(fs.readFileSync(themeJsonPath, 'utf8'));
  const s = t.settings;
  return {
    colors: Object.fromEntries(s.color.palette.map((c) => [c.slug, c.color])),
    fontSizes: Object.fromEntries(s.typography.fontSizes.map((f) => [f.slug, f.size])),
    fontFamilies: Object.fromEntries(s.typography.fontFamilies.map((f) => [f.slug, f.fontFamily])),
    fontWeights: s.custom.fontWeight,
    lineHeights: s.custom.lineHeight,
    spacing: Object.fromEntries(s.spacing.spacingSizes.map((x) => [x.slug, x.size])),
    shadows: Object.fromEntries((s.shadow?.presets ?? []).map((x) => [x.slug, x.shadow])),
    layout: { content: s.layout.contentSize, wide: s.layout.wideSize },
    radius: RADIUS,
  };
}
