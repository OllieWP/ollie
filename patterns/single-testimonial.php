<?php
/**
 * Title: Single Testimonial
 * Slug: ollie/single-testimonial
 * Description: 
 * Categories: ollie/testimonial, ollie/features, ollie/card
 * Keywords: testimonial, text, review, rating, avatar, card
 * Viewport Width: 600
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-main-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)"><!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.3"}},"textColor":"base","fontSize":"large"} -->
<p class="has-base-color has-text-color has-large-font-size" style="line-height:1.3"><?php esc_html_e( 'Wow, I really can\'t believe how powerful the WordPress Site Editor is combined with Ollie. I don\'t even need a page builder anymore!', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Cite"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":58,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="" class="wp-image-58" style="width:60px;height:60px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"base"} -->
<p class="has-base-color has-text-color"><strong><?php esc_html_e( 'Maryann Alpine', 'ollie' ); ?></strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent","fontSize":"small"} -->
<p class="has-main-accent-color has-text-color has-small-font-size"><?php esc_html_e( 'Product Designer', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
