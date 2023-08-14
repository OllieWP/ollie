<?php

namespace ollie;

class Helper {
	/**
	 * Contains instance or null
	 *
	 * @var object|null
	 */
	private static $instance = null;

	/**
	 * Returns instance of Helper.
	 *
	 * @return object
	 */
	public static function get_instance() {
		if ( null === self::$instance ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Setting up admin fields
	 *
	 * @return void
	 */
	public function __construct() {
		add_action( 'wp_head', array( $this, 'add_favicon' ) );
		add_filter( 'wp_theme_json_data_theme', array( $this, 'set_theme_styles' ) );
	}

	/**
	 * Add favicon.
	 *
	 * @return void
	 */
	public function add_favicon() {
		$options = get_option( 'ollie' );
		?>

		<?php if ( isset( $options['site_icon'] ) && $options['site_icon'] != '' ): ?>
            <link rel="shortcut icon" href="<?php echo esc_url( $options['site_icon'] ); ?>">
		<?php endif; ?>
		<?php
	}

	/**
	 * Create child theme for Ollie.
	 *
	 * @return void
	 */
	public static function create_child_theme() {
		// Prepare directories.
		$child_theme_file_dir = OS_PATH . '/inc/child-theme';
		$ollie_dir            = get_template_directory();
		$ollie_child_dir      = str_replace( '/themes/ollie', '/themes/ollie-child', $ollie_dir );

		// Create directory.
		if ( ! file_exists( $ollie_child_dir ) ) {
			wp_mkdir_p( $ollie_child_dir );
		}

		// Copy CSS file.
		if ( ! copy( $child_theme_file_dir . '/style.css', $ollie_child_dir . '/style.css' ) ) {
			error_log( 'Failed to copy style.css.' );
		}

		// Copy screenshot.
		if ( ! copy( $child_theme_file_dir . '/screenshot.png', $ollie_child_dir . '/screenshot.png' ) ) {
			error_log( 'Failed to copy screenshot.png.' );
		}

		// Copy functions.php file.
		if ( ! copy( $child_theme_file_dir . '/functions.php', $ollie_child_dir . '/functions.php' ) ) {
			error_log( 'Failed to copy functions.php.' );
		}

		// Activate child theme.
		switch_theme( 'ollie-child' );
	}

	/**
	 * Create pages in WordPress.
	 *
	 * @param array $pages given list of pages.
	 *
	 * @return array
	 */
	public static function create_pages( $pages ) {
		$create_page_ids = [];

		foreach ( $pages as $page_slug ) {
			// Check if page exists.
			if ( ! get_page_by_path( $page_slug, OBJECT, [ 'page' ] ) ) {
				// Create page.
				$page_id = wp_insert_post(
					array(
						'post_author'  => 1,
						'post_title'   => ucwords( $page_slug ),
						'post_name'    => $page_slug,
						'post_status'  => 'publish',
						'post_content' => '<!-- wp:pattern {"slug":"page-' . $page_slug . '"} /-->',
						'post_type'    => 'page',
					)
				);

				$create_page_ids[ $page_slug ] = $page_id;

				// Update the page template.
				update_post_meta( $page_id, '_wp_page_template', 'page-no-title' );
			}
		}

		return $create_page_ids;
	}

	/**
	 * This function modifies the theme JSON data by updating the theme's color
	 * palette and brand color.
	 *
	 * @param object $theme_json The original theme JSON data.
	 *
	 * @return object The modified theme JSON data.
	 */
	public function set_theme_styles( $theme_json ) {
		$settings = get_option( 'ollie' );

		// Exit early if no style defined.
		if ( ! isset( $settings['style'] ) ) {
			return $theme_json;
		}

		$ollie_style   = json_decode( file_get_contents( get_template_directory() . '/styles/' . $settings['style'] . '.json' ) );
		$ollie_palette = $ollie_style->settings->color->palette;

		// Change brand color.
		if ( isset( $settings['brand_color'] ) && $settings['brand_color'] != '' ) {
			$ollie_palette[0]->color = $settings['brand_color'];
		}

		// Convert values for the filter.
		foreach ( $ollie_palette as $key => $value ) {
			$ollie_palette[ $key ] = (array) $value;
		}

		$new_data = array(
			'version'  => 2,
			'settings' => array(
				'color' => array(
					'palette' => $ollie_palette,
				),
			),
		);

		// Return the modified theme JSON data.
		return $theme_json->update_with( $new_data );
	}
}
