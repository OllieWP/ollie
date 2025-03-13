<?php
/**
 * Title: Testimonial Highlight
 * Slug: ollie/testimonial-highlight
 * Description: 
 * Categories: ollie/testimonial
 * Keywords: testimonial, review, rating, case study, text, heading
 * Viewport Width: 1500
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial Highlight"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"main","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-main-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:heading {"textColor":"base"} -->
<h2 class="wp-block-heading has-base-color has-text-color"><?php esc_html_e( 'I\'m super impressed with how powerful the WordPress Site Editor is. I can design my site so quickly with patterns!', 'ollie' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-separator-thin","backgroundColor":"border-dark"} -->
<hr class="wp-block-separator has-text-color has-border-dark-color has-alpha-channel-opacity has-border-dark-background-color has-background is-style-separator-thin"/>
<!-- /wp:separator -->

<!-- wp:group {"metadata":{"name":"Cite"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'ollie' ); ?>" class="wp-image-59" style="width:60px;height:60px"/></figure>
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
