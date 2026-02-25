<?php
/**
 * Title: Single Product
 * Slug: ollie/woo-single-product
 * Description: Single product page with gallery, details, add to cart, and related products
 * Categories: ollie/woocommerce
 * Keywords: product, single, woocommerce, grid
 * Template Types: single-product
 * Inserter: false
 * Viewport Width: 1500
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"metadata":{"name":"Breadcrumbs"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:woocommerce/breadcrumbs {"fontSize":"x-small","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /-->
	</div>
<!-- /wp:group -->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"inherit":true,"type":"constrained"}} -->
	<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:group {"metadata":{"name":"Product Layout"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
		<!-- wp:group {"metadata":{"name":"Store Notice"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:woocommerce/store-notices /-->
			</div>
		<!-- /wp:group -->
		<!-- wp:columns {"metadata":{"name":"Product Info Columns"},"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0">
			<!-- wp:column {"width":"512px"} -->
				<div class="wp-block-column" style="flex-basis:512px">
				<!-- wp:woocommerce/product-gallery {"hoverZoom":false,"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
					<div class="wp-block-woocommerce-product-gallery wc-block-product-gallery">
					<!-- wp:woocommerce/product-gallery-large-image -->
						<div class="wp-block-woocommerce-product-gallery-large-image wc-block-product-gallery-large-image__inner-blocks">
						<!-- wp:woocommerce/product-image {"showProductLink":false,"showSaleBadge":false,"style":{"border":{"radius":{"topLeft":"10px","topRight":"10px","bottomLeft":"10px","bottomRight":"10px"}}}} -->
							<div class="is-loading"></div>
						<!-- /wp:woocommerce/product-image -->
						<!-- wp:woocommerce/product-sale-badge {"align":"right","backgroundColor":"main","textColor":"base","fontSize":"x-small","style":{"border":{"width":"0px","style":"none","radius":{"topLeft":"100px","topRight":"100px","bottomLeft":"100px","bottomRight":"100px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"5px","right":"5px"}}}} /-->
						<!-- wp:woocommerce/product-gallery-large-image-next-previous -->
							<div class="wp-block-woocommerce-product-gallery-large-image-next-previous"></div>
						<!-- /wp:woocommerce/product-gallery-large-image-next-previous -->
						</div>
					<!-- /wp:woocommerce/product-gallery-large-image -->
					<!-- wp:woocommerce/product-gallery-thumbnails {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					</div>
				<!-- /wp:woocommerce/product-gallery -->
				</div>
			<!-- /wp:column -->
			<!-- wp:column -->
				<div class="wp-block-column">
				<!-- wp:group {"metadata":{"name":"Product Details Wrapper"},"style":{"dimensions":{"minHeight":"100%"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="min-height:100%">
					<!-- wp:group {"metadata":{"name":"Product Info Section"},"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"},"stickyScrollOffset":"25px"} -->
						<div class="wp-block-group">
						<!-- wp:group {"metadata":{"name":"Product Details"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
							<!-- wp:post-title {"level":1,"fontSize":"large","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->
							<!-- wp:woocommerce/product-price {"isDescendentOfSingleProductTemplate":true,"fontSize":"base"} /-->
							<!-- wp:woocommerce/product-rating {"isDescendentOfSingleProductTemplate":true,"fontSize":"x-small"} /-->
							<!-- wp:post-excerpt {"excerptLength":100,"fontSize":"small","__woocommerceNamespace":"woocommerce/product-query/product-summary"} /-->
							</div>
						<!-- /wp:group -->
						<!-- wp:woocommerce/add-to-cart-with-options /-->
						<!-- wp:group {"metadata":{"name":"Product Meta Badges"},"className":"","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
							<!-- wp:group {"metadata":{"name":"Secure Checkout Badge"},"style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
								<div class="wp-block-group">
								<!-- wp:outermost/icon-block {"iconName":"ollie-phosphor-shield-check","customIconColor":"#30b241","iconColorValue":"#30b241","width":"20px"} -->
									<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-color" style="color:#30b241;width:20px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M208,40H48A16,16,0,0,0,32,56v56c0,52.72,25.52,84.67,46.93,102.19,23.06,18.86,46,25.26,47,25.53a8,8,0,0,0,4.2,0c1-.27,23.91-6.67,47-25.53C198.48,196.67,224,164.72,224,112V56A16,16,0,0,0,208,40Zm0,72c0,37.07-13.66,67.16-40.6,89.42A129.3,129.3,0,0,1,128,223.62a128.25,128.25,0,0,1-38.92-21.81C61.82,179.51,48,149.3,48,112l0-56,160,0ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"></path></svg></div></div>
								<!-- /wp:outermost/icon-block -->
								<!-- wp:paragraph {"fontSize":"x-small"} -->
									<p class="has-x-small-font-size">Safe and secure checkout</p>
								<!-- /wp:paragraph -->
								</div>
							<!-- /wp:group -->
							<!-- wp:group {"className":"product-meta-row","style":{"spacing":{"blockGap":"6px"}},"layout":{"type":"flex","flexWrap":"nowrap"},"ollieCustomClasses":["product-meta-row"]} -->
								<div class="wp-block-group product-meta-row">
								<!-- wp:outermost/icon-block {"iconName":"ollie-phosphor-package","customIconColor":"#30b241","iconColorValue":"#30b241","width":"20px"} -->
									<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-color" style="color:#30b241;width:20px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M223.68,66.15,135.68,18a15.88,15.88,0,0,0-15.36,0l-88,48.17a16,16,0,0,0-8.32,14v95.64a16,16,0,0,0,8.32,14l88,48.17a15.88,15.88,0,0,0,15.36,0l88-48.17a16,16,0,0,0,8.32-14V80.18A16,16,0,0,0,223.68,66.15ZM128,32l80.34,44-29.77,16.3-80.35-44ZM128,120,47.66,76l33.9-18.56,80.34,44ZM40,90l80,43.78v85.79L40,175.82Zm176,85.78h0l-80,43.79V133.82l32-17.51V152a8,8,0,0,0,16,0V107.55L216,90v85.77Z"></path></svg></div></div>
								<!-- /wp:outermost/icon-block -->
								<!-- wp:woocommerce/product-stock-indicator {"fontSize":"x-small"} /-->
								</div>
							<!-- /wp:group -->
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
	<!-- wp:group {"metadata":{"name":"Product Details"},"align":"wide","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}},"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
		<!-- wp:group {"metadata":{"name":"Product Tabs Container"},"align":"wide","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm)">
			<!-- wp:woocommerce/product-details {"className":"is-style-minimal"} -->
				<div class="wp-block-woocommerce-product-details alignwide is-style-minimal"></div>
			<!-- /wp:woocommerce/product-details -->
			<!-- wp:woocommerce/product-meta {"align":"wide","metadata":{"ignoredHookedBlocks":["core/post-terms"]}} -->
				<div class="wp-block-woocommerce-product-meta alignwide">
				<!-- wp:group {"metadata":{"name":"Product Taxonomy Links"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"position":{"type":""}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size">
					<!-- wp:woocommerce/product-sku /-->
					<!-- wp:post-terms {"term":"product_cat","prefix":"Category: "} /-->
					<!-- wp:post-terms {"term":"product_tag","prefix":"Tags: "} /-->
					</div>
				<!-- /wp:group -->
				</div>
			<!-- /wp:woocommerce/product-meta -->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->
	<!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":4,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":false},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/related","hideControls":["inherit"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":true,"previewMessage":"Actual products will vary depending on the product being viewed."},"align":"wide"} -->
		<div class="wp-block-woocommerce-product-collection alignwide">
		<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"fontSize":"medium"} -->
			<h2 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
			Related products			</h2>
		<!-- /wp:heading -->
		<!-- wp:woocommerce/product-template -->
			<!-- wp:template-part {"slug":"product-card"} /-->
		<!-- /wp:woocommerce/product-template -->
		</div>
	<!-- /wp:woocommerce/product-collection -->
	</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
