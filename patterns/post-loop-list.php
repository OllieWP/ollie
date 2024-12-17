<?php
/**
 * Title: Post Loop List
 * Slug: ollie/post-loop-list
 * Description: 
 * Categories: ollie/posts
 * Keywords: blog, posts, query, loop
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:group {"metadata":{"name":"Single Post"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:post-template {"layout":{"type":"default"}} -->
<!-- wp:group {"metadata":{"name":"Post Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} /-->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><!-- wp:post-author {"showBio":false} /-->

<!-- wp:paragraph {"textColor":"secondary"} -->
<p class="has-secondary-color has-text-color">·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"5px"},"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} /-->

<!-- wp:post-content /-->

<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"backgroundColor":"secondary"} -->
<hr class="wp-block-separator has-text-color has-secondary-color has-alpha-channel-opacity has-secondary-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination"},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous {"className":"is-style-wp-block-button__link"} /-->

<!-- wp:query-pagination-next {"className":"is-style-wp-block-button__link","backgroundColor":"primary"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->
