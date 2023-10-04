<?php
/**
 * This file adds functions to the Ollie WordPress theme.
 *
 * @package ollie
 * @author  Mike McAlister
 * @license GNU General Public License v2 or later
 * @link    https://olliewp.com
 */

namespace Ollie;

/**
 * Set up theme defaults and register various WordPress features.
 */
function setup() {

	// Enqueue editor styles and fonts.
	add_editor_style( 'style.css' );

	// Remove core block patterns.
	remove_theme_support( 'core-block-patterns' );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\setup' );


/**
 * Enqueue styles.
 */
function enqueue_style_sheet() {
	wp_enqueue_style( sanitize_title( __NAMESPACE__ ), get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_style_sheet' );


/**
 * Add Dashicons for use with block styles.
 */
function enqueue_block_dashicons() {
	wp_enqueue_style( 'dashicons' );
}
add_action( 'enqueue_block_assets', __NAMESPACE__ . '\enqueue_block_dashicons' );


/**
 * Add block style variations.
 */
function register_block_styles() {

	$block_styles = array(
		'core/button'                    => array(
			'secondary-button' => __( 'Secondary', 'ollie' ),
		),
		'core/list'                      => array(
			'list-check'        => __( 'Check', 'ollie' ),
			'list-check-circle' => __( 'Check Circle', 'ollie' ),
			'list-boxed'        => __( 'Boxed', 'ollie' ),
		),
		'core/query-pagination-next'     => array(
			'wp-block-button__link' => __( 'Button', 'ollie' ),
		),
		'core/query-pagination-previous' => array(
			'wp-block-button__link' => __( 'Button', 'ollie' ),
		),
		'core/code'                      => array(
			'dark-code' => __( 'Dark', 'ollie' ),
		),
		'core/cover'                     => array(
			'blur-image-less' => __( 'Blur Image Less', 'ollie' ),
			'blur-image-more' => __( 'Blur Image More', 'ollie' ),
			'rounded-cover'   => __( 'Rounded', 'ollie' ),
		),
		'core/column'                    => array(
			'column-box-shadow' => __( 'Box Shadow', 'ollie' ),
		),
		'core/post-excerpt'              => array(
			'excerpt-truncate-2' => __( 'Truncate 2 Lines', 'ollie' ),
			'excerpt-truncate-3' => __( 'Truncate 3 Lines', 'ollie' ),
			'excerpt-truncate-4' => __( 'Truncate 4 Lines', 'ollie' ),
		),
		'core/group'                     => array(
			'column-box-shadow' => __( 'Box Shadow', 'ollie' ),
		),
		'core/separator'                 => array(
			'separator-dotted' => __( 'Dotted', 'ollie' ),
			'separator-thin'   => __( 'Thin', 'ollie' ),
		),
		'core/image'                     => array(
			'rounded-full' => __( 'Rounded Full', 'ollie' ),
			'media-boxed'  => __( 'Boxed', 'ollie' ),
		),
		'core/preformatted'              => array(
			'preformatted-dark' => __( 'Dark Style', 'ollie' ),
		),
		'core/post-terms'                => array(
			'term-button' => __( 'Button Style', 'ollie' ),
		),
		'core/video'                     => array(
			'media-boxed' => __( 'Boxed', 'ollie' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', __NAMESPACE__ . '\register_block_styles' );


/**
 * Load custom block styles only when the block is used.
 */
function enqueue_custom_block_styles() {

	// Scan our styles folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/styles/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "ollie-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/styles/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/styles/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', __NAMESPACE__ . '\enqueue_custom_block_styles' );


/**
 * Register pattern categories.
 */
function pattern_categories() {

	$block_pattern_categories = array(
		'ollie/card'           => array(
			'label' => __( 'Cards', 'ollie' ),
		),
		'ollie/call-to-action' => array(
			'label' => __( 'Call To Action', 'ollie' ),
		),
		'ollie/features'       => array(
			'label' => __( 'Features', 'ollie' ),
		),
		'ollie/hero'           => array(
			'label' => __( 'Hero', 'ollie' ),
		),
		'ollie/pages'          => array(
			'label' => __( 'Pages', 'ollie' ),
		),
		'ollie/posts'          => array(
			'label' => __( 'Posts', 'ollie' ),
		),
		'ollie/pricing'        => array(
			'label' => __( 'Pricing', 'ollie' ),
		),
		'ollie/testimonial'    => array(
			'label' => __( 'Testimonials', 'ollie' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );


/**
 * Remove last separator on blog/archive if no pagination exists.
 */
function is_paginated() {
	global $wp_query;
	if ( $wp_query->max_num_pages < 2 ) {
		echo '<style>.blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .archive .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .blog .wp-block-post-template .wp-block-post:last-child .entry-content + .wp-block-separator, .search .wp-block-post-template .wp-block-post:last-child .wp-block-post-excerpt + .wp-block-separator { display: none; }</style>';
	}
}
add_action( 'wp_head', __NAMESPACE__ . '\is_paginated' );


/**
 * Add a Sidebar template part area
 */
function template_part_areas( array $areas ) {
	$areas[] = array(
		'area'        => 'sidebar',
		'area_tag'    => 'section',
		'label'       => __( 'Sidebar', 'ollie' ),
		'description' => __( 'The Sidebar template defines a page area that can be found on the Page (With Sidebar) template.', 'ollie' ),
		'icon'        => 'sidebar',
	);

	return $areas;
}
add_filter( 'default_wp_template_part_areas', __NAMESPACE__ . '\template_part_areas' );
