#!/usr/bin/env node
/**
 * Converts design-library/designs/*.html into patterns/<slug>.php.
 *
 * Usage:
 *   node design-library/build/convert.mjs                # all designs
 *   node design-library/build/convert.mjs designs/x.html # one design
 *   --dry-run            print pattern PHP instead of writing
 *   --markup             print plain block markup (no PHP) for pasting into a post
 *   --base-url=URL       theme URL used for image paths with --markup
 */
import fs from 'node:fs';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import { loadTokens, THEME_ROOT } from './lib/tokens.mjs';
import { convertHtml } from './lib/convert.mjs';
import { phpToMarkup } from './lib/serialize.mjs';

const args = process.argv.slice(2);
const dry = args.includes('--dry-run');
const markup = args.includes('--markup');
const baseUrl = (args.find((a) => a.startsWith('--base-url=')) ?? '--base-url=http://localhost/wp-content/themes/ollie').slice('--base-url='.length);
const files = args.filter((a) => !a.startsWith('--'));
const designsDir = path.join(THEME_ROOT, 'design-library', 'designs');
const targets = files.length
  ? files.map((f) => path.resolve(f))
  : fs.readdirSync(designsDir).filter((f) => f.endsWith('.html')).map((f) => path.join(designsDir, f));

const tokens = loadTokens();
let failed = 0;
for (const file of targets) {
  const rel = path.relative(THEME_ROOT, file);
  const { php, meta, errors } = convertHtml(fs.readFileSync(file, 'utf8'), tokens);
  if (errors.length) {
    failed++;
    console.error(`✗ ${rel}`);
    for (const e of errors) console.error(`    ${e.line ? `line ${e.line}: ` : ''}${e.message}`);
    continue;
  }
  const slug = meta.Slug.replace(/^ollie\//, '');
  const out = path.join(THEME_ROOT, 'patterns', `${slug}.php`);
  if (markup) { console.log(phpToMarkup(php, baseUrl)); continue; }
  if (dry) { console.log(php); continue; }
  fs.writeFileSync(out, php);
  console.log(`✓ ${rel} → patterns/${slug}.php`);
}
process.exit(failed ? 1 : 0);
