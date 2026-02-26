<?php
/**
 * WooCommerce specific functions for the Ollie theme.
 *
 * @package ollie
 * @author  Mike McAlister
 * @license GNU General Public License v2 or later
 * @link    https://olliewp.com
 */

namespace Ollie;

/**
 * Check once if WooCommerce is active, then register the appropriate hooks.
 */
if ( class_exists( 'WooCommerce' ) ) {

	// WooCommerce is active.
	add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_woocommerce_styles' );
	add_action( 'init', __NAMESPACE__ . '\unregister_woocommerce_block_patterns', 999 );
	add_filter( 'woocommerce_admin_features', __NAMESPACE__ . '\disable_pattern_toolkit' );

} else {

	// WooCommerce is not active.
	add_filter( 'get_block_templates', __NAMESPACE__ . '\filter_woocommerce_templates', 10, 3 );
	add_action( 'init', __NAMESPACE__ . '\unregister_ollie_woocommerce_patterns', 999 );

}


/**
 * Enqueue WooCommerce specific stylesheet.
 */
function enqueue_woocommerce_styles() {
	wp_enqueue_style(
		'theme-woocommerce-style',
		get_template_directory_uri() . '/assets/styles/woocommerce.css',
		array(),
		'1.0.0'
	);
}


/**
 * Filter out WooCommerce templates when WooCommerce is not active.
 */
function filter_woocommerce_templates( $query_result, $query, $template_type ) {

	// Only filter templates, not template parts.
	if ( 'wp_template' !== $template_type ) {
		return $query_result;
	}

	$woo_templates = array(
		'archive-product',
		'coming-soon',
		'order-confirmation',
		'page-cart',
		'page-checkout',
		'product-search-results',
		'single-product',
	);

	return array_filter(
		$query_result,
		function ( $template ) use ( $woo_templates ) {
			return ! in_array( $template->slug, $woo_templates, true );
		}
	);
}


/**
 * Unregister theme WooCommerce patterns when WooCommerce is not active.
 */
function unregister_ollie_woocommerce_patterns() {
	$registry = \WP_Block_Patterns_Registry::get_instance();
	$patterns = $registry->get_all_registered();

	foreach ( $patterns as $pattern ) {
		if ( strpos( $pattern['name'], 'ollie/woo-' ) === 0 ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}


/**
 * Unregister WooCommerce's default block patterns.
 */
function unregister_woocommerce_block_patterns() {
	$all_patterns = \WP_Block_Patterns_Registry::get_instance()->get_all_registered();

	foreach ( $all_patterns as $pattern ) {
		if ( isset( $pattern['name'] ) && strpos( $pattern['name'], 'woocommerce-blocks' ) === 0 ) {
			unregister_block_pattern( $pattern['name'] );
		}
	}
}


/**
 * Disables the WooCommerce Pattern Toolkit Full Composability feature.
 */
function disable_pattern_toolkit( $features ) {
	$key = array_search( 'pattern-toolkit-full-composability', $features );

	if ( false !== $key ) {
		unset( $features[ $key ] );
	}

	return $features;
}
