<?php
/**
 * Title: Testimonial Row
 * Slug: ollie/testimonial-row
 * Description:
 * Categories: ollie/testimonial
 * Keywords: testimonial, reviews, quotes, avatar, cards, three columns
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Testimonial Row","categories":["ollie/testimonial"],"patternName":"ollie/testimonial-row"},"tagName":"section","align":"full","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
	<section class="wp-block-group alignfull has-base-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
			<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Loved by Builders', 'ollie' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'What people are saying', 'ollie' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
			<p class="has-text-align-center has-secondary-color has-text-color"><?php esc_html_e( 'Thousands of site owners, freelancers, and agencies build with Ollie every day. Here is what a few of them think.', 'ollie' ); ?></p>
		<!-- /wp:paragraph -->
		</div>
	<!-- /wp:group -->
	<!-- wp:columns {"metadata":{"name":"Testimonials"},"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"tertiary"} -->
			<div class="wp-block-column has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph -->
				<p><?php esc_html_e( 'I love using WordPress but traditionally it has been hard to design in. Not any more! Now I can quickly build full page designs with beautiful patterns.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
				<!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
					<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-1.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'ollie' ); ?>" style="width:60px;height:60px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
						<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Alex Glacier', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Freelance Designer', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					</div>
				<!-- /wp:group -->
				</div>
			<!-- /wp:group -->
			</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"tertiary"} -->
			<div class="wp-block-column has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph -->
				<p><?php esc_html_e( 'Ollie made it possible for our small team to ship client sites in days instead of weeks. The patterns just fit together.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
				<!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
					<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'ollie' ); ?>" style="width:60px;height:60px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
						<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Priya Natarajan', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Agency Owner', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					</div>
				<!-- /wp:group -->
				</div>
			<!-- /wp:group -->
			</div>
		<!-- /wp:column -->
		<!-- wp:column {"style":{"border":{"radius":"5px"},"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"}},"backgroundColor":"tertiary"} -->
			<div class="wp-block-column has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:paragraph -->
				<p><?php esc_html_e( 'The site editor finally clicked for me with Ollie. Everything is consistent, fast, and I never have to touch a line of CSS.', 'ollie' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
				<div class="wp-block-group">
				<!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
					<figure class="wp-block-image size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="<?php esc_attr_e( 'Testimonial author avatar', 'ollie' ); ?>" style="width:60px;height:60px"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
						<p style="font-style:normal;font-weight:500"><?php esc_html_e( 'Sam Okafor', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size"><?php esc_html_e( 'Course Creator', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
					</div>
				<!-- /wp:group -->
				</div>
			<!-- /wp:group -->
			</div>
		<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	</section>
<!-- /wp:group -->
