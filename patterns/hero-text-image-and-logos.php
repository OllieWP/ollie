<?php
/**
 * Title: Hero Text, Image, and Logos
 * Slug: ollie/hero-text-image-and-logos
 * Description:
 * Categories: ollie/call-to-action, ollie/hero
 * Keywords: cta, header, buttons, heading, hero, feature, homepage
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Text, Image, and Logos"},"align":"full","backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
<p class="has-text-align-center has-primary-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Welcome to Ollie', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Design faster and publish sooner with Ollie', 'ollie' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required.', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Free Download', 'ollie' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-button-light","borderColor":"tertiary"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link has-border-color has-tertiary-border-color wp-element-button"><?php esc_html_e( 'Explore Ollie', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Image and Logos"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","id":3024,"dimRatio":0,"overlayColor":"main","isUserOverlayColor":true,"minHeight":40,"minHeightUnit":"vw","contentPosition":"bottom center","isDark":false,"align":"wide","className":"is-style-blur-image is-style-default","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"color":{"duotone":"var:preset|duotone|blue"},"border":{"radius":"5px"}}} -->
<div class="wp-block-cover alignwide is-light has-custom-content-position is-position-bottom-center is-style-blur-image is-style-default" style="border-radius:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);min-height:40vw"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3024" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"CTA Row"},"align":"wide","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|medium"},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide is-style-default" style="border-top-left-radius:5px;border-top-right-radius:5px"><!-- wp:group {"metadata":{"name":"Tagline"},"layout":{"type":"constrained","wideSize":"500px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"primary","fontSize":"base"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-base-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '✴︎ Built for the future, but ready to use today', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Today', 'ollie' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"metadata":{"name":"Logo Wrap"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:group {"metadata":{"name":"Logos"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:image {"id":2039,"width":"122px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/logo-1.webp" alt="" class="wp-image-2039" style="width:122px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2041,"width":"148px","height":"auto","sizeSlug":"full","linkDestination":"none","style":{"color":[]}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/logo-2.webp" alt="" class="wp-image-2041" style="width:148px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2042,"width":"139px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/logo-3.webp" alt="" class="wp-image-2042" style="width:139px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2044,"width":"150px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/logo-6.webp" alt="" class="wp-image-2044" style="width:150px;height:auto"/></figure>
<!-- /wp:image -->

<!-- wp:image {"id":2043,"width":"151px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/logo-4.webp" alt="" class="wp-image-2043" style="width:151px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
