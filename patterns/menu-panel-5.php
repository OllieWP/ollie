<?php
/**
 * Title: Menu Panel 5
 * Slug: ollie/menu-panel-5
 * Description: Menu panel with product category grid
 * Categories: ollie/menu
 * Keywords: menu, drop down, mobile, mega menu
 * Viewport Width: 1260
 * Block Types: core/template-part/menu
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Feature","categories":["ollie/menu"],"patternName":"ollie/menu-panel-5"},"align":"full","className":"is-style-background-blur","style":{"position":{"type":""},"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium","top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"tertiary","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull is-style-background-blur has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}},"smartSync":true} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"22%"} -->
		<div class="wp-block-column" style="flex-basis:22%">
			<!-- wp:group {"metadata":{"name":"Intro Text"},"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
				<!-- wp:group {"metadata":{"name":"Headline and Subtext"},"style":{"border":{"radius":{"topLeft":"0","topRight":"0","bottomLeft":"0","bottomRight":"0"}},"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="border-top-left-radius:0;border-top-right-radius:0;border-bottom-left-radius:0;border-bottom-right-radius:0">
					<!-- wp:heading {"fontSize":"medium"} -->
					<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Browse our product categories', 'ollie' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
					<p class="has-secondary-color has-text-color has-link-color has-x-small-font-size"><?php esc_html_e( 'Explore our curated selection of products organized by category to find exactly what you need.', 'ollie' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-fill","fontSize":"x-small"} -->
					<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button"><?php esc_html_e( 'View All Products', 'ollie' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":""} -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"12rem"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9301,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9301" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category One', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '12 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9047,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9047" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Two', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '8 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9221,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9221" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Three', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '15 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9130,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9130" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Four', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '6 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9100,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9100" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Five', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '10 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9249,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9249" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Six', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '5 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9270,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9270" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Seven', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '15 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9126,"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9126" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Eight', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '9 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"flex","flexWrap":"nowrap"},"linkDestination":"term"} -->
				<div class="wp-block-group" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
					<!-- wp:image {"id":9039,"aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"layout":{"selfStretch":"fixed","flexSize":"60px"},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}}} -->
					<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/computer-hands.webp" alt="" class="wp-image-9039" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);aspect-ratio:1;object-fit:cover"/></figure>
					<!-- /wp:image -->

					<!-- wp:group {"metadata":{"name":"Text"},"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( 'Category Nine', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:paragraph {"style":{"typography":{"textTransform":"none"}},"textColor":"secondary","fontSize":"x-small"} -->
						<p class="has-secondary-color has-text-color has-x-small-font-size" style="text-transform:none"><?php esc_html_e( '14 Items', 'ollie' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
