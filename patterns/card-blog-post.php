<?php
/**
 * Title: Blog Post Card
 * Slug: ollie/blog-post-card
 * Description:
 * Categories: ollie/card, ollie/posts
 * Keywords: card, image, text, box, content, link, button
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Blog Post Card"},"className":"is-style-default","backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-base-background-color has-background"><!-- wp:query {"queryId":1,"query":{"perPage":"1","pages":"3","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"fontSize":"large","layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"metadata":{"name":"Blog Post Content"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"5px","width":"1px"}},"backgroundColor":"base","borderColor":"border-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-light-border-color has-base-background-color has-background" style="border-width:1px;border-radius:5px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-featured-image {"isLink":true,"height":"275px","style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"1.5rem"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size" style="margin-top:1.5rem"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:paragraph -->
<p>·</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"className":"is-style-excerpt-truncate-3","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} /-->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
