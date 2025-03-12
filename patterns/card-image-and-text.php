<?php
/**
 * Title: Image and Text Card
 * Slug: ollie/image-and-text-card
 * Description:
 * Categories: ollie/card
 * Keywords: card, image, text, box, content, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Image and Text Card"},"className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px","color":"#e2e2ef","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:#e2e2ef;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Image and Text Card', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! Now, I can quickly build full page designs with beautiful patterns!', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"left","flexWrap":"wrap"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button {"width":50,"className":"is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'ollie' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"width":50,"className":"is-style-secondary-button"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50 is-style-secondary-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Read More', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
