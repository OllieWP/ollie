import test from 'node:test';
import assert from 'node:assert/strict';
import { body, errorsFor } from './helpers.mjs';
import { convertHtml } from '../lib/convert.mjs';
import { tokens } from './helpers.mjs';

test('section → full-width constrained group with default padding and pattern metadata', () => {
  const raw = convertHtml('<!--\nTitle: Test\nSlug: ollie/test\nCategories: ollie/features\n-->\n<section><p>Hi</p></section>', tokens).php;
  assert.match(raw, /<!-- wp:group {"metadata":{"name":"Test","categories":\["ollie\/features"\],"patternName":"ollie\/test"},"tagName":"section"/);
  const out = body('<section><p>Hi</p></section>');
  assert.equal(out, [
    '<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium"}}},"layout":{"inherit":true,"type":"constrained"}} -->',
    '\t<section class="wp-block-group alignfull" style="margin-top:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">',
    '\t<!-- wp:paragraph -->',
    "\t\t<p><?php esc_html_e( 'Hi', 'ollie' ); ?></p>",
    '\t<!-- /wp:paragraph -->',
    '\t</section>',
    '<!-- /wp:group -->',
  ].join('\n'));
});

test('bg-main pairs base text color; explicit text-* wins', () => {
  assert.match(body('<section class="bg-main"><p>x</p></section>'), /"backgroundColor":"main","textColor":"base"/);
  assert.match(body('<section class="bg-main text-main-accent"><p>x</p></section>'), /"backgroundColor":"main","textColor":"main-accent"/);
  assert.match(body('<section class="bg-main"><p>x</p></section>'), /class="wp-block-group alignfull has-base-color has-text-color has-main-background-color has-background"/);
});

test('paragraph styles: align, color, size, weight', () => {
  const out = body('<div><p class="text-center text-primary text-small font-medium">Eyebrow</p></div>');
  assert.match(out, /<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->/);
  assert.match(out, /<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500">/);
});

test('headings carry level and alignment', () => {
  const out = body('<div><h1 class="text-center">T</h1><h2>S</h2><h3 class="text-medium">U</h3></div>');
  assert.match(out, /<!-- wp:heading {"textAlign":"center","level":1} -->\n\t\t<h1 class="wp-block-heading has-text-align-center">/);
  assert.match(out, /<!-- wp:heading -->\n\t\t<h2 class="wp-block-heading">/);
  assert.match(out, /<!-- wp:heading {"level":3,"fontSize":"medium"} -->\n\t\t<h3 class="wp-block-heading has-medium-font-size">/);
});

test('grid of cards → grid group with minimumColumnWidth; cards get border/radius/min-height', () => {
  const out = body('<div class="grid grid-cols-3 gap-large max-w-wide"><div class="bg-base border border-border-light rounded-card p-medium min-h-full flex-col gap-small"><p>a</p></div></div>');
  assert.match(out, /<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset\|spacing\|large"}},"layout":{"type":"grid","minimumColumnWidth":"18rem"}} -->/);
  assert.match(out, /<!-- wp:group {"style":{"border":{"width":"1px","radius":"5px"},"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset\|spacing\|medium","right":"var:preset\|spacing\|medium","bottom":"var:preset\|spacing\|medium","left":"var:preset\|spacing\|medium"},"blockGap":"var:preset\|spacing\|small"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"flex","orientation":"vertical"}} -->/);
  assert.match(body('<div class="grid grid-cols-2 grid-fixed"><p>a</p></div>'), /"layout":{"type":"grid","columnCount":2}/);
  assert.match(out, /class="wp-block-group has-base-background-color has-background has-border-color has-border-light-border-color" style="border-width:1px;border-radius:5px;min-height:100%;padding-top:var\(--wp--preset--spacing--medium\)/);
});

test('flex layouts map axes the way WordPress does', () => {
  assert.match(body('<div class="flex items-center justify-between"><p>a</p></div>'), /"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}/);
  assert.match(body('<div class="flex-col items-center"><p>a</p></div>'), /"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}/);
  assert.match(body('<div class="flex flex-wrap"><p>a</p></div>'), /"layout":{"type":"flex","flexWrap":"wrap"}/);
});

test('buttons: styles, width, size, href', () => {
  const out = body('<div class="buttons justify-center"><a class="btn-brand" href="https://x.test">Go</a><a class="btn-light w-full text-x-small">More</a></div>');
  assert.match(out, /<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset\|spacing\|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->/);
  assert.match(out, /<!-- wp:button {"url":"https:\/\/x.test","className":"is-style-button-brand"} -->\n\t\t<div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button" href="https:\/\/x.test"><\?php esc_html_e\( 'Go', 'ollie' \); \?><\/a><\/div>/);
  assert.match(out, /<!-- wp:button {"width":100,"className":"is-style-button-light","fontSize":"x-small"} -->\n\t\t<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-button-light has-custom-font-size has-x-small-font-size">/);
});

test('images: avatar sizing, rounded styles, theme URI rewrite, alt escaping', () => {
  const out = body('<div><img src="../patterns/images/avatar-1.webp" alt="Jo\'s face" class="rounded-full w-[60px] h-[60px]"><img src="../patterns/images/desktop.webp" class="rounded-card max-w-wide"></div>');
  assert.match(out, /<!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->/);
  assert.match(out, /<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<\?php echo esc_url\( get_template_directory_uri\(\) \); \?>\/patterns\/images\/avatar-1.webp" alt="<\?php esc_attr_e\( 'Jo\\'s face', 'ollie' \); \?>" style="width:60px;height:60px"\/><\/figure>/);
  assert.match(out, /<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":"5px"}}} -->\n\t\t<figure class="wp-block-image alignwide size-full has-custom-border"><img [\s\S]*?style="border-radius:5px"\/>/);
});

test('columns, lists, quotes, separators', () => {
  const out = body('<div class="columns items-center gap-x-large max-w-wide"><div class="column w-1/3"><p>a</p></div><div class="column"><ul><li>one</li><li>two <strong>bold</strong></li></ul><blockquote><p>q</p><cite>Who</cite></blockquote><hr></div></div>');
  assert.match(out, /<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset\|spacing\|x-large","left":"var:preset\|spacing\|x-large"}}}} -->\n\t<div class="wp-block-columns alignwide are-vertically-aligned-center">/);
  assert.match(out, /<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->\n\t\t<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%">/);
  assert.match(out, /<!-- wp:list -->\n\t\t\t<ul class="wp-block-list">\n\t\t\t<!-- wp:list-item -->\n\t\t\t\t<li><\?php esc_html_e\( 'one', 'ollie' \); \?><\/li>/);
  assert.match(out, /<li><\?php esc_html_e\( 'two', 'ollie' \); \?> <strong><\?php esc_html_e\( 'bold', 'ollie' \); \?><\/strong><\/li>/);
  assert.match(out, /<blockquote class="wp-block-quote">\n\t\t\t<!-- wp:paragraph -->[\s\S]*<cite><\?php esc_html_e\( 'Who', 'ollie' \); \?><\/cite>\n\t\t\t<\/blockquote>/);
  assert.match(out, /<!-- wp:separator -->\n\t\t\t<hr class="wp-block-separator has-alpha-channel-opacity"\/>/);
});

test('data-block override merges attributes and data-name sets metadata', () => {
  const out = body('<section><div data-name="Titles" data-block=\'{"attrs":{"style":{"dimensions":{"minHeight":"50vh"}}}}\' class="gap-small"><p>a</p></div></section>');
  assert.match(out, /<!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset\|spacing\|small"},"dimensions":{"minHeight":"50vh"}},"layout":{"type":"constrained"}} -->/);
  assert.match(out, /style="min-height:50vh"/);
});

test('unknown classes, unmapped tags and stray text are reported with line numbers', () => {
  const errs = errorsFor('<section class="p-4 bg-blue-500">\n<table><tr><td>x</td></tr></table>\nloose text\n<p class="text-xl">a</p>\n</section>');
  const msgs = errs.map((e) => `${e.line}:${e.message}`);
  assert.ok(msgs.some((m) => m.startsWith('7:unknown class "p-4"')), msgs.join('\n'));
  assert.ok(msgs.some((m) => m.startsWith('7:unknown class "bg-blue-500"')));
  assert.ok(msgs.some((m) => m.startsWith('8:unmapped <table>')));
  assert.ok(msgs.some((m) => m.includes('stray text "loose text"')));
  assert.ok(msgs.some((m) => m.startsWith('10:unknown class "text-xl"')));
});

test('front matter is required and produces the PHP docblock', () => {
  assert.equal(convertHtml('<section><p>x</p></section>', tokens).errors[0].message, 'Missing front-matter comment (Title, Slug, Categories, ...)');
  const r = convertHtml('<!--\nTitle: Hero Centered\nSlug: ollie/hero-centered\nCategories: ollie/hero\nKeywords: hero\nViewport Width: 1500\n-->\n<section><p>x</p></section>', tokens);
  assert.equal(r.errors.length, 0);
  assert.ok(r.php.startsWith('<?php\n/**\n * Title: Hero Centered\n * Slug: ollie/hero-centered\n * Description:\n * Categories: ollie/hero\n * Keywords: hero\n * Viewport Width: 1500\n * Block Types:\n * Post Types:\n * Inserter: true\n */\n?>\n'), r.php.slice(0, 300));
});

test('full document wrapper (html/head/body) is unwrapped and head is ignored', () => {
  const out = body('<!doctype html><html><head><link rel="stylesheet" href="../tokens.css"><script src="x"></script></head><body><section><p>x</p></section></body></html>');
  assert.match(out, /^<!-- wp:group/);
});
