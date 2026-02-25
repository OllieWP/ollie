<?php
/**
 * Title: Menu Panel 6
 * Slug: ollie/menu-panel-6
 * Description: Dark menu panel with creative studio services grid
 * Categories: ollie/menu
 * Keywords: menu, drop down, mobile, mega menu
 * Viewport Width: 1260
 * Block Types: core/template-part/menu
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Container"},"align":"full","className":"is-style-background-blur","style":{"position":{"type":""},"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}},"shadow":"var:preset|shadow|extra-large-light","color":{"background":"#14100ec4"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-background-blur has-base-color has-text-color has-background has-link-color" style="background-color:#14100ec4;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium);box-shadow:var(--wp--preset--shadow--extra-large-light)">
	<!-- wp:columns {"align":"wide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:group {"metadata":{"name":"Intro Text"},"style":{"dimensions":{"minHeight":"100%"},"layout":{"rowSpan":1}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Our creative studio services', 'ollie' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","fontSize":"x-small"} -->
					<p class="has-main-accent-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'From brand identity to digital experiences, we craft solutions that elevate your business and connect with your audience.', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-button-light","fontSize":"x-small"} -->
					<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'View All Services', 'ollie' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"stretch","width":""} -->
		<div class="wp-block-column is-vertically-aligned-stretch">
			<!-- wp:group {"gridBreakpoints":[{"value":768,"label":"768px"},{"value":600,"label":"600px"}],"gridBreakpointSettings":{"600":{"columnCount":1},"768":{"columnCount":2}},"align":"wide","style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
			<div class="wp-block-group alignwide" style="min-height:100%">
				<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp","dimRatio":90,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","customGradient":"linear-gradient(180deg,rgba(21,17,31,0) 33%,rgb(14,14,14) 97%)","contentPosition":"bottom center","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:100%">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(21,17,31,0) 33%,rgb(14,14,14) 97%)"></span>
					<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" data-object-fit="cover"/>
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"metadata":{"name":"Card Headline and Subtext"},"style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0">
							<!-- wp:paragraph -->
							<p><strong><?php esc_html_e( 'Brand Identity', 'ollie' ); ?></strong></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","dimRatio":90,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","customGradient":"linear-gradient(180deg,rgba(21,17,31,0) 41%,rgb(14,14,14) 100%)","contentPosition":"bottom center","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:100%">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(21,17,31,0) 41%,rgb(14,14,14) 100%)"></span>
					<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/>
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"metadata":{"name":"Card Headline and Subtext"},"style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0">
							<!-- wp:paragraph -->
							<p><strong><?php esc_html_e( 'Web Design', 'ollie' ); ?></strong></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->

				<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","dimRatio":90,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"%","customGradient":"linear-gradient(180deg,rgba(21,17,31,0) 41%,rgb(14,14,14) 100%)","contentPosition":"bottom center","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"dimensions":{"aspectRatio":"1"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-cover has-custom-content-position is-position-bottom-center" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);min-height:100%">
					<span aria-hidden="true" class="wp-block-cover__background has-background-dim-90 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgba(21,17,31,0) 41%,rgb(14,14,14) 100%)"></span>
					<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" data-object-fit="cover"/>
					<div class="wp-block-cover__inner-container">
						<!-- wp:group {"metadata":{"name":"Card Headline and Subtext"},"style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
						<div class="wp-block-group" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0">
							<!-- wp:paragraph -->
							<p><strong><?php esc_html_e( 'Digital Strategy', 'ollie' ); ?></strong></p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
