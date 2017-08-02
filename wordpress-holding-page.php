<?php
/*
 * Plugin Name: Wordpress Holding Page
 * Plugin URI: https://github.com/backtofront/wordpress-holding-page
 * Description: Displays a coming soon page for anyone who's not logged in.
 * Version: 1.0
 * Author: Back to Front
 * Author URI: http://backtofront.london
 * License: GPL2
 *
 * @package wordpress-holding-page
 * @copyright Copyright (c) 2015, Ashley Evans
 * @license GPL2+
*/

/**
 * Maintenance Page
 *
 * Displays the coming soon page for anyone who's not logged in.
 * The login page gets excluded so that you can login if necessary.
 *
 * @return void
 */
function ng_maintenance_mode() {
	global $pagenow;
	if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin() ) {
		header( $_SERVER["SERVER_PROTOCOL"] . ' 503 Service Temporarily Unavailable', true, 503 );
		header( 'Content-Type: text/html; charset=utf-8' );
		if ( file_exists( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' ) ) {
			require_once( plugin_dir_path( __FILE__ ) . 'views/maintenance.php' );
		}
		die();
	}
}

add_action( 'wp_loaded', 'ng_maintenance_mode' );
