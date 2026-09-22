import test from 'node:test';
import assert from 'node:assert/strict';
import { generateTokensCss } from '../gen-tokens.mjs';
import { tokens } from './helpers.mjs';

test('tokens.css defines every palette, spacing and font-size slug from theme.json', () => {
  const css = generateTokensCss(tokens);
  for (const slug of Object.keys(tokens.colors)) assert.match(css, new RegExp(`--color-${slug}:`));
  for (const slug of Object.keys(tokens.spacing)) assert.match(css, new RegExp(`--spacing-${slug}:`));
  for (const slug of Object.keys(tokens.fontSizes).filter((s) => s !== 'base')) assert.match(css, new RegExp(`--text-${slug}:`));
  assert.match(css, /--spacing-\*: initial/);
  assert.doesNotMatch(css, /--text-base:/);
});
