<?php
/**
 * Title: Lead Magnet Card
 * Slug: ollie/lead-magnet-card
 * Description: A call-to-action box to offer a free download or sign up user to an email list.
 * Categories: ollie/call-to-action, ollie/card
 * Keywords: download, button, cta, email, card
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Lead Magnet Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","id":2843,"dimRatio":0,"customOverlayColor":"#b8b4b6","isUserOverlayColor":true,"focalPoint":{"x":0.58,"y":0.52},"minHeight":281,"minHeightUnit":"px","isDark":false,"className":"is-style-rounded-cover","style":{"dimensions":{"aspectRatio":"3/4"}}} -->
<div class="wp-block-cover is-light is-style-rounded-cover" style="min-height:281px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b8b4b6"></span><img class="wp-block-cover__image-background wp-image-2843" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" style="object-position:58% 52%" data-object-fit="cover" data-object-position="58% 52%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Write title…', 'ollie' ); ?>"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Download Ollie', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Start using the powerful new WordPress editor with Ollie', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Start creating beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme.', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"width":100,"className":"lemonsqueezy-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lemonsqueezy-button"><a class="wp-block-button__link wp-element-button" href="https://olliewp.com"><?php esc_html_e( 'Download Ollie for free!', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
