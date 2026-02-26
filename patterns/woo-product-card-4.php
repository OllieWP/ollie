<?php
/**
 * Title: Product Card 4
 * Slug: ollie/woo-product-card-4
 * Description: Product card with title and rating in row layout
 * Categories: ollie/card, ollie/product-card
 * Keywords: product,  card,  image,  text,  button,  woocommerce
 * Block Types:
 * Inserter: false
 * Viewport Width: 600
 */
?>
<!-- wp:group {"metadata":{"name":"Product Card"},"className":"","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
	<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} -->
		<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
			<div class="wp-block-group" style="min-height:100%">
			<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true,"align":"right","backgroundColor":"main","textColor":"base","style":{"border":{"radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"},"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"typography":{"fontSize":"0.75rem"}}} /-->
			</div>
		<!-- /wp:group -->
	<!-- /wp:woocommerce/product-image -->
	<!-- wp:group {"metadata":{"name":"Product Details"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
			<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"typography":{"fontSize":"0.8rem"}}} /-->
			</div>
		<!-- /wp:group -->
		<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"secondary","fontSize":"small","style":{"typography":{"fontStyle":"normal"}}} /-->
		</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-button {"isDescendentOfQueryLoop":true,"className":"is-style-fill","backgroundColor":"tertiary","textColor":"main","style":{"elements":{"link":{"color":{"text":"var:preset|color|main"}}}}} /-->
	</div>
<!-- /wp:group -->
