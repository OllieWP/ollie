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
<!-- wp:group {"metadata":{"name":"Hero Text, Image, and Logos"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"tagName":"section","metadata":{"name":"Hero"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary"} -->
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
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","id":3024,"dimRatio":0,"overlayColor":"main","isUserOverlayColor":true,"minHeightUnit":"vw","contentPosition":"center center","isDark":false,"align":"wide","className":"is-style-blur-image is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|large","top":"var:preset|spacing|large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px"},"dimensions":{"aspectRatio":"16/9"}}} -->
<div class="wp-block-cover alignwide is-light is-style-blur-image is-style-default" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3024" alt="<?php esc_attr_e( 'Desktop preview', 'ollie' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"<?php esc_attr_e( 'Write title…', 'ollie' ); ?>"} -->
<p class="has-text-align-center"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->
