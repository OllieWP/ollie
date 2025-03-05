<?php
/**
 * Title: Footer Minimal Light
 * Slug: ollie/footer-light-minimal
 * Description:
 * Categories: footer
 * Keywords:
 * Viewport Width: 1500
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"footer","metadata":{"name":"Footer"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px"},"blockGap":"var:preset|spacing|large"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"border":{"top":{"color":"var:preset|color|border-light","width":"1px"},"right":{},"bottom":{},"left":{}}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<footer class="wp-block-group alignfull has-base-background-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--border-light);border-top-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0,"isLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"textColor":"main"} /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo wp_kses_post( _x( '© 2025 · Powered by WordPress and <a href="https://olliewp.com">Ollie</a>', 'Copyright text', 'ollie' ) ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></footer>
<!-- /wp:group -->
