<?php
/**
 * Title: WooCommerce Order Confirmation
 * Slug: ollie/woo-order-confirmation
 * Description: The order confirmation page for WooCommerce.
 * Categories: ollie/woocommerce
 * Keywords: order, confirmation, woocommerce
 * Template Types: order-confirmation
 * Inserter: false
 * Viewport Width: 1500
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"metadata":{"name":"Archive Header"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
	<!-- wp:columns {"verticalAlignment":"bottom","isStackedOnMobile":false,"metadata":{"name":"Header Columns"},"align":"wide"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-bottom is-not-stacked-on-mobile">
		<!-- wp:column {"verticalAlignment":"bottom","metadata":{"name":"Title Column"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
			<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:woocommerce/order-confirmation-status {"fontSize":"small"} /-->
			</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"bottom","metadata":{"name":"Search Column"}} -->
			<div class="wp-block-column is-vertically-aligned-bottom">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
				<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-button-light","fontSize":"x-small","icon":"arrow-left","iconPositionLeft":true} -->
					<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link has-x-small-font-size has-custom-font-size wp-element-button">Return to Store</a></div>
				<!-- /wp:button -->
				</div>
			<!-- /wp:buttons -->
			</div>
		<!-- /wp:column -->
		</div>
	<!-- /wp:columns -->
	</div>
<!-- /wp:group -->
<!-- wp:group {"metadata":{"name":"Main Content"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"metadata":{"name":"Confirmation Wrap"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
		<!-- wp:woocommerce/page-content-wrapper {"page":"cart"} -->
			<!-- wp:group {"metadata":{"name":"Store Notices Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)">
				<!-- wp:woocommerce/store-notices /-->
				</div>
			<!-- /wp:group -->
			<!-- wp:group {"lock":{"remove":true},"metadata":{"name":"Confirmation Content"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|large"}},"backgroundColor":"base","fontSize":"small","layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group alignwide has-base-background-color has-background has-small-font-size" style="margin-top:0;margin-bottom:0">
				<!-- wp:woocommerce/order-confirmation-summary /-->
				<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
					<!-- wp:heading {"style":{"typography":{"fontSize":"24px"}}} -->
						<h2 class="wp-block-heading" style="font-size:24px">Order details</h2>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
				<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->
				<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
					<!-- wp:heading {"style":{"typography":{"fontSize":"24px"}}} -->
						<h2 class="wp-block-heading" style="font-size:24px">Downloads</h2>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
				<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->
				<!-- wp:columns {"align":"wide","className":"wc-block-order-confirmation-address-wrapper"} -->
					<div class="wp-block-columns alignwide wc-block-order-confirmation-address-wrapper">
					<!-- wp:column -->
						<div class="wp-block-column">
						<!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
							<!-- wp:heading {"style":{"typography":{"fontSize":"24px"}}} -->
								<h2 class="wp-block-heading" style="font-size:24px">Shipping address</h2>
							<!-- /wp:heading -->
							<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
						<!-- /wp:woocommerce/order-confirmation-shipping-wrapper -->
						</div>
					<!-- /wp:column -->
					<!-- wp:column -->
						<div class="wp-block-column">
						<!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
							<!-- wp:heading {"style":{"typography":{"fontSize":"24px"}}} -->
								<h2 class="wp-block-heading" style="font-size:24px">Billing address</h2>
							<!-- /wp:heading -->
							<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
						<!-- /wp:woocommerce/order-confirmation-billing-wrapper -->
						</div>
					<!-- /wp:column -->
					</div>
				<!-- /wp:columns -->
				<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
					<!-- wp:heading {"style":{"typography":{"fontSize":"24px"}}} -->
						<h2 class="wp-block-heading" style="font-size:24px">Additional information</h2>
					<!-- /wp:heading -->
					<!-- wp:woocommerce/order-confirmation-additional-fields /-->
				<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->
				<!-- wp:woocommerce/order-confirmation-additional-information /-->
				</div>
			<!-- /wp:group -->
		<!-- /wp:woocommerce/page-content-wrapper -->
		</div>
	<!-- /wp:group -->
	</div>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
