<?php
/**
 * Title: Profile Box
 * Slug: profile-box
 * Description: A profile box with an avatar, links to social media, and buttons
 * Categories: ollie/call-to-action, ollie/pages
 * Keywords: links, linktree, buttons, profile, bio
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:image {"align":"center","id":57,"width":132,"height":132,"sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="" class="wp-image-57" width="132" height="132"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Sandra Voyager</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color">Use this page as a LinkTree alternative. Link your social media accounts to this page so your followers can find all of your important links.</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconBackgroundColor":"main","iconBackgroundColorValue":"#14111f","align":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"},"margin":{"top":"var:preset|spacing|medium"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links aligncenter has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"dribbble"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">Visit My Website</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"is-style-fill","fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size is-style-fill has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">Follow on Twitter</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">Buy My Creator Course</a></div>
<!-- /wp:button -->

<!-- wp:button {"width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"fontSize":"base"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-base-font-size"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">Join my Patreon</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
