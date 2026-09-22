<?php
/**
 * Title: Hero Centered
 * Slug: ollie/hero-centered
 * Description:
 * Categories: ollie/hero
 * Keywords: hero, centered, call to action, buttons, screenshot, image
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Hero Centered","categories":["ollie/hero"],"patternName":"ollie/hero-centered"},"tagName":"section","align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","bottom":"0","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
	<section class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:0;padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'WordPress Reimagined', 'ollie' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.1"}},"fontSize":"xx-large"} -->
			<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:600;line-height:1.1"><?php esc_html_e( 'Build your site with clicks, not code.', 'ollie' ); ?></h1>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
			<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Ollie block theme. No coding skills required.', 'ollie' ); ?></p>
		<!-- /wp:paragraph -->
		</div>
	<!-- /wp:group -->
	<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<div class="wp-block-buttons">
		<!-- wp:button {"className":"is-style-button-brand"} -->
			<div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Download Ollie', 'ollie' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-secondary-button"} -->
			<div class="wp-block-button is-style-secondary-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'See Features', 'ollie' ); ?></a></div>
		<!-- /wp:button -->
		</div>
	<!-- /wp:buttons -->
	<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","style":{"border":{"radius":"5px"}}} -->
		<figure class="wp-block-image alignwide size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="<?php esc_attr_e( 'Desktop screenshot', 'ollie' ); ?>" style="border-radius:5px"/></figure>
	<!-- /wp:image -->
	</section>
<!-- /wp:group -->
