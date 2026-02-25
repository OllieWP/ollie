<?php
/**
 * Title: Product Card 5
 * Slug: ollie/woo-product-card-5
 * Description: Product card with hover add to cart button overlay
 * Categories: ollie/card, ollie/product-card
 * Keywords: product,  card,  image,  text,  button,  woocommerce
 * Block Types:
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
		<!-- wp:group {"metadata":{"name":"Add to Cart Button"},"className":"is-style-background-blur ollie-product-button-hover-group ollie-product-button-full-width","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"border":{"radius":{"bottomLeft":"10px","bottomRight":"10px"}},"color":{"background":"#14100e59"}},"textColor":"base","layout":{"type":"constrained"},"ollieCustomClasses":["ollie-product-button-hover-group","ollie-product-button-full-width"]} -->
			<div class="wp-block-group is-style-background-blur ollie-product-button-hover-group ollie-product-button-full-width has-base-color has-text-color has-background has-link-color" style="border-bottom-left-radius:10px;border-bottom-right-radius:10px;background-color:#14100e59">
			<!-- wp:woocommerce/product-button {"textAlign":"center","width":100,"isDescendentOfQueryLoop":true,"className":"is-style-fill","textColor":"base","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"left":"var:preset|spacing|small","right":"var:preset|spacing|small","top":"0.8rem","bottom":"0.8rem"}},"color":{"background":"#ffffff00"}}} /-->
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
