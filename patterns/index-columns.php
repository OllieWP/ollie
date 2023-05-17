<?php
/**
 * Title: Index Columns
 * Slug: index-columns
 * Description: 
 * Categories: 
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types: 
 * Inserter: true
 */

?>
<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"fontSize":"large"} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"radius":"5px"}},"backgroundColor":"tertiary"} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:5px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:post-featured-image {"isLink":true,"height":"225px","style":{"color":{}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"x-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600"}},"fontSize":"base"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size"><!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--x-large)"><!-- wp:query-pagination {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

<!-- wp:query-pagination-next {"backgroundColor":"primary","className":"is-style-wp-block-button__link"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
