<?php
/**
 * Title: WooCommerce Checkout
 * Slug: ollie/woo-checkout
 * Description: The checkout page for WooCommerce.
 * Categories: ollie/woocommerce
 * Keywords: checkout, woocommerce
 * Template Types: page-checkout
 * Inserter: false
 * Viewport Width: 1500
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Checkout Header"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|border-light","width":"1px"},"left":{"width":"0px","style":"none"}}},"layout":{"type":"constrained"}} -->
<header class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)">
		<!-- wp:site-title {"level":0} /-->
		<!-- wp:woocommerce/cart-link {"cartIcon":"bag","content":"Return to Cart","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /-->
		</div>
	<!-- /wp:group -->
	</header>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Page Header"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
		<!-- wp:post-title {"level":1,"align":"wide","fontSize":"medium"} /-->
		</div>
	<!-- /wp:group -->
	</div>
<!-- /wp:group -->
<!-- wp:woocommerce/page-content-wrapper {"page":"checkout"} -->
	<!-- wp:group {"tagName":"main","metadata":{"name":"Checkout Main Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"metadata":{"name":"Store Notices Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:woocommerce/store-notices /-->
			</div>
		<!-- /wp:group -->
		<!-- wp:post-content {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}}} /-->
		</main>
	<!-- /wp:group -->
<!-- /wp:woocommerce/page-content-wrapper -->
