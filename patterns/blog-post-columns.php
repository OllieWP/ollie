<?php
/**
 * Title: Blog Post Columns
 * Slug: ollie/blog-post-columns
 * Description:
 * Categories: ollie/posts
 * Keywords: blog, posts, query, pages
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Blog Post Columns"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"tertiary","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"primary","fontSize":"small"} -->
<p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Latest and Greatest', 'ollie' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e( 'Read our latest blog articles', 'ollie' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e( 'Learn the latest and greatest in WordPress site building. We\'re offering tutorials, tips and tricks, and video walkthroughs on our blog.', 'ollie' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":"2","pages":"2","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:pattern {"slug":"ollie/blog-post-card"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
