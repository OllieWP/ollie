import { loadTokens } from '../lib/tokens.mjs';
import { convertHtml } from '../lib/convert.mjs';

export const tokens = loadTokens();

const FM = `<!--
Title: Test
Slug: ollie/test
Categories: ollie/features
Keywords: a, b
-->
`;

/** Convert a body snippet with a default front matter; returns block markup only (no PHP header). */
export function body(html) {
  const r = convertHtml(FM + html, tokens);
  if (r.errors.length) throw new Error(r.errors.map((e) => `line ${e.line}: ${e.message}`).join('\n'));
  const ROOT_META = '"metadata":{"name":"Test","categories":["ollie/features"],"patternName":"ollie/test"}';
  // Strip the root pattern metadata so fixtures assert on the mapping under test only.
  return r.php.split('?>\n')[1].trim().replace(`{${ROOT_META},`, '{').replace(` {${ROOT_META}}`, '');
}

export function errorsFor(html) {
  return convertHtml(FM + html, tokens).errors;
}
