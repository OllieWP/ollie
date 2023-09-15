<?php
/**
 * Title: Image and Text Card
 * Slug: image-and-text-card
 * Description:
 * Categories: ollie/card
 * Keywords: card, image, text, box, content, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px","color":"#e2e2ef","width":"1px"}},"backgroundColor":"base","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:#e2e2ef;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#462CFF","#ECE8FF"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":4} -->
<h4 class="wp-block-heading">Image and Text Card</h4>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":50,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link wp-element-button">Get Started</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"className":"is-style-secondary-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-secondary-button"><a class="wp-block-button__link wp-element-button">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
