<?php
/**
 * Title: Blog Post Columns
 * Slug: blog-post-columns
 * Description:
 * Categories: columns, posts
 * Keywords: blog, posts, query, pages
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500">Latest and Greatest</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size">Read our latest blog articles</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Learn the latest and greatest in WordPress site building. We're offering tutorials, tips and tricks, and video walkthroughs on our blog.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":3},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"fontSize":"large"} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"275px","style":{"color":{}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"x-small"} /-->

<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600","textDecoration":"none"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"},"fontSize":"small"} -->
<div class="wp-block-group has-secondary-color has-text-color has-small-font-size"><!-- wp:post-date {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
