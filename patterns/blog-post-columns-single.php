<?php
/**
 * Title: Blog Post Columns Single
 * Slug: blog-post-columns-single
 * Description:
 * Categories: ollie/posts
 * Keywords: blog, posts, query, pages
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: false
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"fontSize":"large"} -->
<!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"height":"120px","style":{"color":{}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"fontSize":"base"} /-->

<!-- wp:post-date {"textColor":"main-accent","fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0"><!-- wp:separator {"align":"wide","style":{"color":{"background":"#625e6d"}},"className":"is-style-separator-dotted"} -->
<hr class="wp-block-separator alignwide has-text-color has-alpha-channel-opacity has-background is-style-separator-dotted" style="background-color:#625e6d;color:#625e6d"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->
