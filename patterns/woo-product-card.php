<?php
/**
 * Title: Product Card 1
 * Slug: ollie/woo-product-card
 * Description: Product card with hover add to cart button in pill overlay
 * Categories: ollie/card, ollie/product-card
 * Keywords: product,  card,  image,  text,  button,  woocommerce
 * Block Types: core/query/woocommerce/product-query 
 * Inserter: false
 * Viewport Width: 600
 */
?>
<!-- wp:group {"metadata":{"name":"Product Card"},"className":"ollie-product-button-hover","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"},"ollieCustomClasses":["ollie-product-button-hover"]} -->
	<div class="wp-block-group ollie-product-button-hover">
	<!-- wp:group {"metadata":{"name":"Product Image"},"className":"ollie-product-button-hover-image","layout":{"type":"constrained"},"ollieCustomClasses":["ollie-product-button-hover-image"]} -->
		<div class="wp-block-group ollie-product-button-hover-image">
		<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} -->
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
				<div class="wp-block-group" style="min-height:100%">
				<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"right","backgroundColor":"main","textColor":"base","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"0.75rem"}}} /-->
				</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/product-image -->
		<!-- wp:group {"metadata":{"name":"Add to Cart Button"},"className":"ollie-product-button-hover-group is-style-background-blur","style":{"color":{"background":"#29292930"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"typography":{"fontSize":"0.8rem"}},"textColor":"base","layout":{"type":"constrained"}} -->
			<div class="wp-block-group ollie-product-button-hover-group is-style-background-blur has-base-color has-text-color has-background has-link-color" style="border-top-left-radius:100px;border-top-right-radius:100px;border-bottom-left-radius:100px;border-bottom-right-radius:100px;background-color:#29292930;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.8rem">
			<!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"is-style-fill","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"0.8rem"},"color":{"background":"#ffffff00"}}} /-->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->
	<!-- wp:group {"metadata":{"name":"Product Details"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
		<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"secondary","fontSize":"small","style":{"typography":{"fontStyle":"normal"}}} /-->
		</div>
	<!-- /wp:group -->
	</div>
<!-- /wp:group -->
