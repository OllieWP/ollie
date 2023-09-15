<?php
/**
 * Title: Lead Magnet Card
 * Slug: lead-magnet-card
 * Description: A call-to-action box to offer a free download or sign up user to an email list.
 * Categories: ollie/call-to-action, ollie/card
 * Keywords: download, button, cta, email, card
 * Viewport Width: 800
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/skateboarding.webp","id":33150,"dimRatio":0,"focalPoint":{"x":0.44,"y":0.48},"minHeight":281,"minHeightUnit":"px","isDark":false,"className":"is-style-rounded-cover","style":{"color":{"duotone":["#462CFF","#ECE8FF"]}}} -->
<div class="wp-block-cover is-light is-style-rounded-cover" style="min-height:281px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-33150" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/skateboarding.webp" style="object-position:44% 48%" data-object-fit="cover" data-object-position="44% 48%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500">Download Ollie</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Start using the powerful new WordPress editor with Ollie</h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Start creating beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"lemonsqueezy-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 lemonsqueezy-button"><a class="wp-block-button__link wp-element-button" href="https://olliewp.com">Download Ollie for free!</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
