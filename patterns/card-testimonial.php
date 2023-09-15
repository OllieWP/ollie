<?php
/**
 * Title: Testimonial Card
 * Slug: card-testimonial
 * Description:
 * Categories: ollie/card, ollie/testimonial
 * Keywords: testimonial, card, avatar, text, quote, review, rating
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px","color":"#e2e2ef","width":"1px"}},"backgroundColor":"base","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:#e2e2ef;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph -->
<p>I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent","className":"is-style-separator-dotted"} -->
<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":62,"width":60,"height":60,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-7.webp" alt="" class="wp-image-62" width="60" height="60"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p style="font-style:normal;font-weight:500">Alex Glacier</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
