<?php
/**
 * Title: Call To Action Card
 * Slug: ollie/card-call-to-action
 * Description: 
 * Categories: ollie/card, ollie/call-to-action
 * Keywords: card, download, box, link, button, cta, call to action
 * Viewport Width: 600
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Call To Action Box","categories":["ollie/card"],"patternName":"ollie/card-call-to-action"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-primary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Title Row"},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"medium"} -->
<p class="has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Download Ollie', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"primary-accent"} -->
<p class="has-primary-accent-color has-text-color"><?php esc_html_e( 'Version 1.0', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Text"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required. Anyone can do it!', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-button-light"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-button-light"><a class="wp-block-button__link wp-element-button" href="https://olliewp.com"><?php esc_html_e( 'Download Now', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary-accent"}}}},"textColor":"primary-accent","fontSize":"x-small"} -->
<p class="has-text-align-center has-primary-accent-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'or view on', 'ollie' ); ?><a href="#"><?php esc_html_e( 'WordPress.org', 'ollie' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
