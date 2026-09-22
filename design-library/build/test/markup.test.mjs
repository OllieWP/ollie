import test from 'node:test';
import assert from 'node:assert/strict';
import { phpToMarkup } from '../lib/serialize.mjs';

test('phpToMarkup strips the header and resolves i18n calls and the theme URI', () => {
  const php = `<?php\n/**\n * Title: T\n */\n?>\n<!-- wp:paragraph -->\n<p><?php esc_html_e( 'Jo\\'s <b> & co', 'ollie' ); ?></p>\n<!-- /wp:paragraph -->\n<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/a.webp" alt="<?php esc_attr_e( 'Say "hi"', 'ollie' ); ?>"/>\n`;
  assert.equal(phpToMarkup(php, 'https://x.test/wp-content/themes/ollie/'),
    `<!-- wp:paragraph -->\n<p>Jo's &lt;b&gt; &amp; co</p>\n<!-- /wp:paragraph -->\n<img src="https://x.test/wp-content/themes/ollie/patterns/images/a.webp" alt="Say &quot;hi&quot;"/>\n`);
});
