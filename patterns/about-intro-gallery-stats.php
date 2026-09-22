<?php
/**
 * Title: About Intro With Gallery and Stats
 * Slug: ollie/about-intro-gallery-stats
 * Description:
 * Categories: ollie/features, ollie/pages
 * Keywords: about, intro, gallery, images, stats, numbers, split, studio
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"About Intro With Gallery and Stats","categories":["ollie/features","ollie/pages"],"patternName":"ollie/about-intro-gallery-stats"},"tagName":"section","align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
	<section class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:columns {"metadata":{"name":"Intro"},"verticalAlignment":"top","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-top">
		<!-- wp:column {"verticalAlignment":"top","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
				<p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'About Milora Co.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"style":{"typography":{"lineHeight":"1.1"}},"fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size" style="line-height:1.1"><?php esc_html_e( 'Beyond design, shaping the way life is lived', 'ollie' ); ?></h2>
			<!-- /wp:heading -->
			</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"top"} -->
			<div class="wp-block-column is-vertically-aligned-top">
			<!-- wp:paragraph {"textColor":"secondary"} -->
				<p class="has-secondary-color has-text-color"><?php esc_html_e( 'At Milora Co., we create thoughtful interiors that balance form and function, tailored to your lifestyle, your space, and the way you live every day. Rooted in intentional design and a deep understanding of how spaces are lived in, we go beyond aesthetics to craft environments that feel as good as they look.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	<!-- wp:group {"metadata":{"name":"Gallery"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group alignwide">
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" alt="<?php esc_attr_e( 'Studio interior', 'ollie' ); ?>" style="border-radius:5px;aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="<?php esc_attr_e( 'Studio interior', 'ollie' ); ?>" style="border-radius:5px;aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="<?php esc_attr_e( 'Studio interior', 'ollie' ); ?>" style="border-radius:5px;aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
			<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" alt="<?php esc_attr_e( 'Studio interior', 'ollie' ); ?>" style="border-radius:5px;aspect-ratio:1;object-fit:cover"/></figure>
		<!-- /wp:image -->
		</div>
	<!-- /wp:group -->
	<!-- wp:group {"metadata":{"name":"Stats"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","minimumColumnWidth":"14rem"}} -->
		<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"Stat"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"425","lineHeight":"1"}},"fontSize":"xx-large"} -->
				<h3 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:425;line-height:1"><?php esc_html_e( '20', 'ollie' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
				<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Projects completed', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
				<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Every space delivered with care and precision.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
		<!-- wp:group {"metadata":{"name":"Stat"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"425","lineHeight":"1"}},"fontSize":"xx-large"} -->
				<h3 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:425;line-height:1"><?php esc_html_e( '32', 'ollie' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
				<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Unique concepts', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
				<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Each concept crafted to reflect a distinct vision.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
		<!-- wp:group {"metadata":{"name":"Stat"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"425","lineHeight":"1"}},"fontSize":"xx-large"} -->
				<h3 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:425;line-height:1"><?php esc_html_e( '80', 'ollie' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
				<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Projects in progress', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
				<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Currently shaping new living environments.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
		<!-- wp:group {"metadata":{"name":"Stat"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
			<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"425","lineHeight":"1"}},"fontSize":"xx-large"} -->
				<h3 class="wp-block-heading has-xx-large-font-size" style="font-style:normal;font-weight:425;line-height:1"><?php esc_html_e( '278', 'ollie' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
				<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Satisfied clients', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
				<p class="has-secondary-color has-text-color has-small-font-size"><?php esc_html_e( 'Trusted by homeowners who value thoughtful design.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->
	</section>
<!-- /wp:group -->
