<?php

namespace ollie;

class Settings {
	/**
	 * Contains instance or null
	 *
	 * @var object|null
	 */
	private static $instance = null;

	/**
	 * Returns instance of Settings.
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
		add_action( 'admin_menu', array( $this, 'add_menu' ) );
		add_action( 'rest_api_init', array( $this, 'rest_api_init' ) );
		add_action( 'admin_footer', array( $this, 'render_modal' ) );
	}

	/**
	 * Add admin menu item.
	 *
	 * @return void
	 */
	public function add_menu() {
		$settings_suffix = add_theme_page(
			__( 'Ollie', 'ollie' ),
			__( 'Ollie', 'ollie' ),
			'manage_options',
			'ollie',
			array( $this, 'render_settings' )
		);

		add_action( "admin_print_scripts-{$settings_suffix}", array( $this, 'add_settings_scripts' ) );
		add_action( 'admin_print_scripts', array( $this, 'add_settings_scripts' ) );
	}

	/**
	 * Enqueue admin settings scripts.
	 *
	 * @return void
	 */
	public function add_settings_scripts() {
		global $pagenow;

		$screen = get_current_screen();

		wp_enqueue_media();

		wp_enqueue_script( 'ollie-onboarding-settings', OLLIE_SETTINGS_URL . '/build/index.js', array(
			'wp-api',
			'wp-components',
			'wp-plugins',
			'wp-edit-post',
			'wp-edit-site',
			'wp-element',
			'wp-api-fetch',
			'wp-data',
			'wp-i18n',
			'wp-block-editor'
		), OLLIE_SETTINGS_VERSION, true );

		$ollie_settings = get_option( 'ollie' );

		if ( 'appearance_page_ollie' === $screen->base ) {
			$args = array(
				'screen'              => 'settings',
				'version'             => OLLIE_SETTINGS_VERSION,
				'dashboard_link'      => esc_url( admin_url() ),
				'home_link'           => esc_url( home_url() ),
				'logo'                => OLLIE_SETTINGS_URL . '/assets/ollie-logo.svg',
				'onboarding_complete' => false,
			);

			if ( isset( $ollie_settings['onboarding_complete'] ) ) {
				$args['onboarding_complete'] = $ollie_settings['onboarding_complete'];
			}

			// Adjust homepage display based on WP settings.
			$front = get_option( 'show_on_front' );

			if ( 'posts' === $front ) {
				$args['homepage_display'] = 'posts';
				$args['home_id']          = '';
				$args['blog_id']          = '';
			} else {
				$args['homepage_display'] = 'page';
				$args['home_id']          = get_option( 'page_on_front' );
				$args['blog_id']          = get_option( 'page_for_posts' );
			}

			wp_localize_script( 'ollie-onboarding-settings', 'ollie_options', $args );

			// Make the blocks translatable.
			if ( function_exists( 'wp_set_script_translations' ) ) {
				wp_set_script_translations( 'ollie-onboarding-settings', 'ollie-data', OLLIE_SETTINGS_PATH . '/languages' );
			}

			wp_enqueue_style( 'ollie-onboarding-settings-style', OLLIE_SETTINGS_URL . '/build/index.css', array( 'wp-components' ) );
		} else {
			$args = array(
				'screen'          => in_array( $pagenow, [ 'themes.php', 'plugins.php' ] ) ? 'modal' : '',
				'logo'            => OLLIE_SETTINGS_URL . '/assets/ollie-logo.svg',
				'onboarding_link' => esc_url( admin_url() ) . 'themes.php?page=ollie',
				'skip_onboarding' => false,
			);

			if ( isset( $ollie_settings['skip_onboarding'] ) ) {
				$args['skip_onboarding'] = $ollie_settings['skip_onboarding'];
			}

			wp_localize_script( 'ollie-onboarding-settings', 'ollie_options', $args );

			// Make the blocks translatable.
			if ( function_exists( 'wp_set_script_translations' ) ) {
				wp_set_script_translations( 'ollie-onboarding-settings', 'ollie-data', OLLIE_SETTINGS_PATH . '/languages' );
			}
		}
	}

	/**
	 * Render Ollie onboarding settings.
	 *
	 * @return void
	 */
	public function render_settings() {
		?>
        <div id="ollie-onboarding"></div>
		<?php
	}

	/**
	 * Render Ollie onboarding modal.
	 *
	 * @return void
	 */
	public function render_modal() {
		global $pagenow;
		if ( ( 'themes.php' == $pagenow ) || ( 'plugins.php' == $pagenow ) ) {
			?>
            <div id="ollie-modal"></div>
            <style>
                @keyframes OllieFadeIn {
                    0% {
                        opacity: 0;
                    }
                    100% {
                        opacity: 1;
                    }
                }

                .ollie-modal-background {
                    background: rgba(93, 93, 111, 0.7);
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 9991;
                    animation: OllieFadeIn .5s;
                }

                .ollie-modal-content {
                    background: white;
                    padding: 50px;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    max-width: 440px;
                    box-shadow: 0 3px 10px rgb(0, 0, 0, 0.2);
                    z-index: 99;
                    border-radius: 3px;
                }

                .ollie-modal-close {
                    background: none;
                    border: none;
                    padding: 0;
                    position: absolute;
                    right: 20px;
                    top: 20px;
                }

                .ollie-modal-close:hover {
                    cursor: pointer;
                    opacity: .6;
                }

                .ollie-modal-content img {
                    max-width: 300px;
                    margin: 0 auto 35px auto;
                    display: block;
                }

                .ollie-modal-content h2 {
                    text-align: center;
                    font-size: 2.2em;
                }

                .ollie-modal-content p {
                    margin: 25px auto;
                    font-size: 16px;
                    text-align: center;
                }

                .ollie-modal-content .ollie-modal-inner button {
                    padding: 15px 20px;
                    transition: 0.3s ease;
                    background: #3858e9;
                    color: white;
                    border: none;
                    cursor: pointer;
                    border-radius: 2px;
                    font-size: 16px;
                }

                .ollie-modal-content .ollie-modal-inner button:hover {
                    background: #2145e6;
                }

                .ollie-modal-content button.ollie-modal-skip {
                    background: none;
                    color: #3c434a;
                }

                .ollie-modal-content button.ollie-modal-skip:hover {
                    text-decoration: underline;
                    background: none;
                }
            </style>
			<?php
		}
	}

	/**
	 * Set up Rest API routes.
	 *
	 * @return void
	 */
	public function rest_api_init() {
		register_rest_route( 'ollie/v1', '/settings', array(
			'methods'             => 'GET',
			'callback'            => [ $this, 'get_settings' ],
			'permission_callback' => function () {
				return current_user_can( 'manage_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/settings', array(
			'methods'             => 'POST',
			'callback'            => [ $this, 'save_settings' ],
			'permission_callback' => function () {
				return current_user_can( 'manage_options' ) && current_user_can( 'edit_theme_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/complete-onboarding', array(
			'methods'             => 'POST',
			'callback'            => [ $this, 'complete_onboarding' ],
			'permission_callback' => function () {
				return current_user_can( 'edit_theme_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/skip-onboarding', array(
			'methods'             => 'POST',
			'callback'            => [ $this, 'skip_onboarding' ],
			'permission_callback' => function () {
				return current_user_can( 'edit_theme_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/site-logo', array(
			'methods'             => 'GET',
			'callback'            => [ $this, 'get_logo' ],
			'permission_callback' => function () {
				return current_user_can( 'manage_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/site-logo', array(
			'methods'             => 'POST',
			'callback'            => [ $this, 'set_logo' ],
			'permission_callback' => function () {
				return current_user_can( 'edit_theme_options' );
			},
		) );

		register_rest_route( 'ollie/v1', '/create-pages', array(
			'methods'             => 'POST',
			'callback'            => [ $this, 'create_pages' ],
			'permission_callback' => function () {
				return current_user_can( 'publish_pages' );
			},
		) );
	}

	/**
	 * Get Ollie settings via Rest API.
	 *
	 * @return false|mixed|null
	 */
	public function get_settings() {
		return get_option( 'ollie' );
	}

	/**
	 * Save settings via Rest API.
	 *
	 * @param object $request given request.
	 *
	 * @return string
	 */
	public function save_settings( $request ) {
		if ( $request->get_params() ) {
			$options = $request->get_params();
			update_option( 'ollie', $this->sanitize_options_array( $options ) );

			// Update logo.
			if ( isset( $options['site_logo'] ) ) {
				update_option( 'site_logo', absint( $options['site_logo'] ) );
			}

			// Set up the homepage.
			if ( isset( $options['homepage_display'] ) ) {
				switch ( $options['homepage_display'] ) {
					case 'posts':
						// Just update the option.
						update_option( 'show_on_front', 'posts' );
						break;
					case 'page':
						// Update options for homepage + blog page.
						update_option( 'show_on_front', 'page' );
						update_option( 'page_on_front', absint( $options['home_id'] ) );
						update_option( 'page_for_posts', absint( $options['blog_id'] ) );
						break;
				}
			}

			return json_encode( [ "status" => 200, "message" => "Ok" ] );
		}

		return json_encode( [ "status" => 400, "message" => "Could not save settings" ] );
	}

	/**
	 * Finish onboarding.
	 *
	 * @param object $request given request.
	 *
	 * @return string
	 */
	public function complete_onboarding( $request ) {
		if ( $request->get_params() ) {
			$options                        = get_option( 'ollie', [] );
			$options['onboarding_complete'] = true;

			update_option( 'ollie', $options );

			return json_encode( [ "status" => 200, "message" => "Ok" ] );
		}

		return json_encode( [ "status" => 400, "message" => "There was a problem with finishing the onboarding." ] );
	}

	/**
	 * Finish onboarding.
	 *
	 * @param object $request given request.
	 *
	 * @return string
	 */
	public function skip_onboarding( $request ) {
		if ( $request->get_params() ) {
			$options = (array) get_option( 'ollie', [] );

			// Set skip onboarding to true and update.
			$options['skip_onboarding'] = true;
			update_option( 'ollie', $options );

			return json_encode( [ "status" => 200, "message" => "Ok" ] );
		}

		return json_encode( [ "status" => 400, "message" => "There was a problem skipping the onboarding." ] );
	}

	/**
	 * Create pages.
	 *
	 * @param object $request given request.
	 *
	 * @return string
	 */
	public function create_pages( $request ) {
		if ( $request->get_params() ) {
			$pages = $request->get_params();
			unset( $pages['_locale'] );
			unset( $pages['rest_route'] );

			$created_pages = Helper::create_pages( $pages );

			if ( isset( $created_pages['home'] ) ) {
				update_option( 'show_on_front', 'page' );
				update_option( 'page_on_front', absint( $created_pages['home'] ) );
			}

			if ( isset( $created_pages['blog'] ) ) {
				update_option( 'page_for_posts', absint( $created_pages['blog'] ) );
			}

			return json_encode( [ "status" => 200, "pages" => $created_pages, "message" => "Ok" ] );
		}

		return json_encode( [ "status" => 400, "message" => "Could not create pages." ] );
	}

	/**
	 * Get site logo via Rest API.
	 *
	 * @return false|mixed|null
	 */
	public function get_logo() {
		return wp_get_attachment_url( get_option( 'site_logo' ) );
	}

	/**
	 * Update site logo via REST API.
	 *
	 * @param object $request given request.
	 *
	 * @return string
	 */
	public function set_logo( $request ) {
		if ( $request->get_params() ) {
			$data = $request->get_params();

			return $data['logo'];
		}

		return json_encode( [ "status" => 400, "message" => "Could not set logo" ] );
	}

	/**
	 * Sanitize options array before saving to database.
	 * 
	 * @param array $options User-submitted options.
	 * 
	 * @return array Sanitized array of options.
	 */
	private function sanitize_options_array( array $options = [] ) {
		$sanitized_options = [];

		foreach ( $options as $key => $value ) {
			switch( $key ) {
				case 'site_logo':
					$sanitized_options[ $key ] = absint( $value );
					break;
				case 'skip_onboarding':
					$sanitized_options[ $key ] = (bool) $value;
					break;
				case 'onboarding_complete':
					$sanitized_options[ $key ] = (bool) $value;
					break;
				default:
					$sanitized_options[ $key ] = sanitize_text_field( $value );
					break;
			}
		}

		return $sanitized_options;
	}
}
