<?php
/**
 * Title: Pricing Table Card
 * Slug: ollie/pricing-table-card
 * Description:
 * Categories: ollie/card, ollie/pricing
 * Keywords: card, price, pricing, button, list, purchase, download
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Pricing Table Card","categories":["ollie/pricing"],"patternName":"ollie/pricing-table-card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"5px","width":"1px"}},"borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color" style="border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Price"},"style":{"spacing":{"blockGap":"10px"}},"fontSize":"base","layout":{"type":"flex","flexWrap":"nowrap","orientation":"horizontal"}} -->
<div class="wp-block-group has-base-font-size"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1"}},"fontSize":"x-large","fontFamily":"primary"} -->
<p class="has-primary-font-family has-x-large-font-size" style="font-style:normal;font-weight:500;line-height:1"><?php esc_html_e( '$9', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"1.4rem"}}},"textColor":"secondary","fontSize":"small","fontFamily":"primary"} -->
<p class="has-secondary-color has-text-color has-primary-font-family has-small-font-size" style="margin-top:1.4rem"><?php esc_html_e( 'per month', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Price Description"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Beginner', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Great for beginners who want to give your product a trial run and see if it fits their workflow.', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><?php esc_html_e( 'Get Started', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:group {"metadata":{"name":"Features"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"fontSize":"small","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-small-font-size"><!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'ollie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Publishing Suite', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'ollie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Advanced Tools', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'ollie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Priority Support', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Feature"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><strong><?php esc_html_e( '✓', 'ollie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'Blazing-Fast Performance', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
