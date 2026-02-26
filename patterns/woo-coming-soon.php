<?php
/**
 * Title: WooCommerce Coming Soon
 * Slug: ollie/woo-coming-soon
 * Description: The coming soon page for WooCommerce.
 * Categories: ollie/woocommerce
 * Keywords: coming soon, woocommerce
 * Template Types: coming-soon
 * Inserter: false
 * Viewport Width: 1500
 */
?>
<!-- wp:woocommerce/coming-soon {"storeOnly":true,"className":"woocommerce-coming-soon-store-only"} -->
<div class="wp-block-woocommerce-coming-soon woocommerce-coming-soon-store-only">
	<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
	<!-- wp:group {"metadata":{"name":"Coming Soon Container"},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"metadata":{"name":"Coming Soon Content"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"var:preset|border-radius|md","topRight":"var:preset|border-radius|md","bottomLeft":"var:preset|border-radius|md","bottomRight":"var:preset|border-radius|md"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-tertiary-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--md);border-top-right-radius:var(--wp--preset--border-radius--md);border-bottom-left-radius:var(--wp--preset--border-radius--md);border-bottom-right-radius:var(--wp--preset--border-radius--md);margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
			<!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large","fontFamily":"cardo"} -->
				<h1 class="wp-block-heading has-text-align-center has-cardo-font-family has-large-font-size">Great things are on the horizon</h1>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontFamily":"inter"} -->
				<p class="has-text-align-center has-secondary-color has-text-color has-link-color has-inter-font-family">Something big is brewing! Our store is in the works and will be launching soon!</p>
			<!-- /wp:paragraph -->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->
	<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
	</div>
<!-- /wp:woocommerce/coming-soon -->
