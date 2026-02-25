<?php
/**
 * Title: Post Sticky Sidebar
 * Slug: ollie/template-post-sticky
 * Template Types: single
 * Description: A post layout with a sticky sidebar containing post meta and a main content area.
 * Categories: ollie/posts
 * Keywords: post, sticky, sidebar
 * Viewport Width: 1500
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->
<!-- wp:group {"metadata":{"name":"Content Area"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
	<!-- wp:columns {"metadata":{"name":"Post"},"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"stretch","width":"35%"} -->
		<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:35%">
			<!-- wp:group {"metadata":{"name":"Sticky Sidebar"},"className":"has-scroll-resize","style":{"dimensions":{"minHeight":""},"position":{"type":"sticky","top":"0px"},"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"},"stickyScrollOffset":"30px","ollieCustomClasses":["has-scroll-resize"]} -->
			<div class="wp-block-group has-scroll-resize">
				<!-- wp:group {"metadata":{"name":"Titles"},"align":"wide","className":"row-stack-mobile","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group alignwide row-stack-mobile">
					<!-- wp:post-terms {"term":"category","style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","fontSize":"0.85rem","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"0px"}}},"textColor":"primary"} /-->

					<!-- wp:post-title {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"large","textWrap":"balance"} /-->

					<!-- wp:group {"metadata":{"name":"Post Meta"},"style":{"spacing":{"blockGap":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
					<div class="wp-block-group has-secondary-color has-text-color has-link-color has-x-small-font-size">
						<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /-->

						<!-- wp:paragraph -->
						<p><strong>·</strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:post-author {"showAvatar":false} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"className":"is-style-excerpt-truncate-4","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small"} /-->

					<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"main","iconBackgroundColorValue":"#15110F","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"8px"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default" style="margin-top:var(--wp--preset--spacing--medium)">
						<!-- wp:social-link {"url":"#","service":"x"} /-->

						<!-- wp:social-link {"url":"#","service":"facebook"} /-->

						<!-- wp:social-link {"url":"#","service":"youtube"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"isUserOverlayColor":true,"isDark":false,"className":"is-style-default","style":{"border":{"radius":{"topLeft":"var:preset|border-radius|md","topRight":"var:preset|border-radius|md","bottomLeft":"var:preset|border-radius|md","bottomRight":"var:preset|border-radius|md"}},"dimensions":{"aspectRatio":"4/3"}},"layout":{"type":"constrained"},"animationType":"zoomBackgroundOnHover","animationScale":1.02,"animationPresetId":"card-background-zoom"} -->
			<div class="wp-block-cover is-light is-style-default" style="border-top-left-radius:var(--wp--preset--border-radius--md);border-top-right-radius:var(--wp--preset--border-radius--md);border-bottom-left-radius:var(--wp--preset--border-radius--md);border-bottom-right-radius:var(--wp--preset--border-radius--md)">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"base"} -->
					<p class="has-text-align-center has-base-font-size"></p>
					<!-- /wp:paragraph -->
				</div>
			</div>
			<!-- /wp:cover -->

			<!-- wp:post-content {"align":"wide","layout":{"type":"constrained"}} /-->

			<!-- wp:group {"className":"post-meta","style":{"border":{"radius":"5px"},"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<div class="wp-block-group post-meta has-small-font-size" style="border-radius:5px;margin-top:var(--wp--preset--spacing--large)">
				<!-- wp:post-terms {"term":"post_tag","className":"is-style-term-button","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:comments {"align":"full","className":"wp-block-comments-query-loop","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|large"}},"border":{"radius":{"topLeft":"var:preset|border-radius|sm","topRight":"var:preset|border-radius|sm","bottomLeft":"var:preset|border-radius|sm","bottomRight":"var:preset|border-radius|sm"}}},"backgroundColor":"tertiary"} -->
			<div class="wp-block-comments alignfull wp-block-comments-query-loop has-tertiary-background-color has-background" style="border-top-left-radius:var(--wp--preset--border-radius--sm);border-top-right-radius:var(--wp--preset--border-radius--sm);border-bottom-left-radius:var(--wp--preset--border-radius--sm);border-bottom-right-radius:var(--wp--preset--border-radius--sm);margin-top:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:group {"metadata":{"name":"Comments Inside"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-right:0;padding-left:0">
					<!-- wp:group {"metadata":{"name":"Comments Title"},"style":{"spacing":{"blockGap":"0.5rem"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:heading {"fontSize":"medium"} -->
						<h2 class="wp-block-heading has-medium-font-size"><?php esc_html_e( 'Comments', 'ollie' ); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:comments-title {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"base"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-template {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
						<!-- wp:group {"metadata":{"name":"Comment Content"},"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"radius":"5px","bottom":{"color":"var:preset|color|border-light","width":"1px"}}},"backgroundColor":"base"} -->
						<div class="wp-block-group has-base-background-color has-background" style="border-radius:5px;border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;margin-top:0;margin-bottom:var(--wp--preset--spacing--medium);padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
							<!-- wp:group {"metadata":{"name":"Comment Author"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group">
								<!-- wp:avatar {"size":44,"style":{"border":{"radius":"100px"}}} /-->

								<!-- wp:group {"style":{"spacing":{"blockGap":"0"}}} -->
								<div class="wp-block-group">
									<!-- wp:comment-author-name /-->

									<!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /-->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->

							<!-- wp:comment-content {"fontSize":"small"} /-->

							<!-- wp:group {"metadata":{"name":"Comment Actions"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"spacing":{"blockGap":"var:preset|spacing|small"}},"textColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap"}} -->
							<div class="wp-block-group has-secondary-color has-text-color has-link-color">
								<!-- wp:comment-edit-link /-->

								<!-- wp:comment-reply-link /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					<!-- /wp:comment-template -->

					<!-- wp:group {"metadata":{"name":"Comment Pagination"},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:comments-pagination {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"flex","justifyContent":"space-between"}} -->
							<!-- wp:comments-pagination-previous /-->

							<!-- wp:comments-pagination-next /-->
						<!-- /wp:comments-pagination -->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-comments-form /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:comments -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->
