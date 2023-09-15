<?php
/**
 * Title: Blog Post Card
 * Slug: blog-post-card
 * Description:
 * Categories: ollie/card, ollie/posts
 * Keywords: card, image, text, box, content, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px","color":"#e2e2ef","width":"1px"}},"backgroundColor":"base","className":"is-style-default","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-background-color has-background" style="border-color:#e2e2ef;border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"displayLayout":{"type":"list","columns":2},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"fontSize":"large"} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"275px","style":{"color":{"duotone":["#462CFF","#ECE8FF"]}}} /-->

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
