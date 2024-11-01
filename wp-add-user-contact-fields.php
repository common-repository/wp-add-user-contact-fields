<?php

/**
 * WP Add User Contact Fields bootstrap file
 *
 * @wordpress-plugin
 * Plugin Name:       WP Add User Contact Fields
 * Plugin URI:        https://gitlab.com/fcojgodoy/wp-add-user-contact-fields
 * Description:       Add user contact methods/fields that themes can use.
 * Version:           0.0.1
 * Author:            Fco. J. Godoy
 * Author URI:        franciscogodoy.es
 * License:           GPL-3.0+
 * License URI:       https://www.gnu.org/licenses/gpl.html
 * Text Domain:       wp-add-user-contact-fields
 * Domain Path:       /languages
 */


// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}


/**
 * Admin
 *
 */
if ( is_admin() ) {
    // We are in admin mode
    require_once ( plugin_dir_path ( __FILE__ ) . 'includes/wp-add-user-contact-fields-admin.php' );
}


/**
 * Load the plugin text domain for translation.
 *
 */
function wpaucf_load_plugin_textdomain() {

	load_plugin_textdomain(
		'wp-add-user-contact-fields',
		false,
		basename( dirname( __FILE__ ) ) . '/languages/'
	);

}

add_action( 'plugins_loaded', 'wpaucf_load_plugin_textdomain' );
