<?php
/**
 * Title: Product Search Results
 * Slug: ollie/woo-product-search
 * Description: Product search results page with grid layout and pagination
 * Categories: ollie/woocommerce
 * Keywords: product, search, woocommerce, grid
 * Template Types: product-search-results
 * Inserter: false
 * Viewport Width: 1500
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"tagName":"main","metadata":{"name":"Main Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"inherit":true,"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
	<!-- wp:group {"metadata":{"name":"Search Results Header"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
			<div class="wp-block-group alignwide">
			<!-- wp:woocommerce/breadcrumbs {"fontSize":"x-small","textColor":"secondary","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}}} /-->
			<!-- wp:query-title {"type":"search","fontSize":"large"} /-->
			</div>
		<!-- /wp:group -->
		</div>
	<!-- /wp:group -->
	<!-- wp:group {"metadata":{"name":"Product Grid Section"},"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"metadata":{"name":"Store Notices Container"},"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)">
			<!-- wp:woocommerce/store-notices /-->
			</div>
		<!-- /wp:group -->
		<!-- wp:group {"metadata":{"name":"Results Bar"},"className":"alignwide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
			<!-- wp:woocommerce/product-results-count {"fontSize":"small"} /-->
			<!-- wp:woocommerce/catalog-sorting /-->
			</div>
		<!-- /wp:group -->
		<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"woocommerceAttributes":[],"woocommerceStockStatus":["instock","outofstock","onbackorder"],"taxQuery":[],"isProductCollectionBlock":true,"perPage":9,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":true,"featured":false,"woocommerceOnSale":false,"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill","fixedWidth":""},"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"align":"wide"} -->
			<div class="wp-block-woocommerce-product-collection alignwide">
			<!-- wp:woocommerce/product-template -->
				<!-- wp:template-part {"slug":"product-card"} /-->
			<!-- /wp:woocommerce/product-template -->
			<!-- wp:group {"metadata":{"name":"Pagination"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
				<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
					<!-- wp:query-pagination-previous {"backgroundColor":"tertiary"} /-->
					<!-- wp:query-pagination-numbers /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
				</div>
			<!-- /wp:group -->
			<!-- wp:woocommerce/product-collection-no-results -->
				<!-- wp:group {"metadata":{"name":"No Results Message"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"backgroundColor":"tertiary","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"wrap"}} -->
					<div class="wp-block-group has-tertiary-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
					<!-- wp:outermost/icon-block {"iconName":"ollie-phosphor-magnifying-glass","iconBackgroundColor":"main","iconBackgroundColorValue":"#15110F","iconColor":"base","iconColorValue":"#fff","width":"42px","style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} -->
						<div class="wp-block-outermost-icon-block"><div class="icon-container has-icon-color has-icon-background-color has-main-background-color has-base-color" style="background-color:#15110F;color:#fff;width:42px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;border-radius:10px;transform:rotate(0deg) scaleX(1) scaleY(1)"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="currentColor"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg></div></div>
					<!-- /wp:outermost/icon-block -->
					<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
						<p class="has-text-align-center has-medium-font-size"><strong>No results found</strong></p>
					<!-- /wp:paragraph -->
					<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} -->
						<p class="has-text-align-center has-secondary-color has-text-color has-link-color">You can try <a href="#" class="wc-link-clear-any-filters">clearing any filters</a> or head to our <a href="#" class="wc-link-stores-home">store's home</a>.</p>
					<!-- /wp:paragraph -->
					</div>
				<!-- /wp:group -->
			<!-- /wp:woocommerce/product-collection-no-results -->
			</div>
		<!-- /wp:woocommerce/product-collection -->
		</div>
	<!-- /wp:group -->
	</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
