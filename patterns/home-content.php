<?php
/**
 * Title: Home Content
 * Slug: home-content
 * Description: A placeholder for determining homepage content
 * Inserter: false
 */

// Determine the homepage content based on Settings → Reading settings
$posts_page_id = get_option( 'page_for_posts' );

if ( $posts_page_id ) {
	echo '<!-- wp:pattern {"slug":"post-loop-grid"} /-->';
} else {
	echo '<!-- wp:pattern {"slug":"page-home"} /-->';
}
