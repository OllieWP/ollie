<?php

define( 'OLLIE_SETTINGS_PATH', untrailingslashit( get_template_directory() ) . '/inc/settings' );
define( 'OLLIE_SETTINGS_URL', untrailingslashit( get_template_directory_uri() . '/inc/settings' ) );
define( 'OLLIE_SETTINGS_VERSION', '1.0' );

require_once( OLLIE_SETTINGS_PATH . '/inc/class-os-settings.php' );
require_once( OLLIE_SETTINGS_PATH . '/inc/class-os-helper.php' );

ollie\Settings::get_instance();
ollie\Helper::get_instance();
