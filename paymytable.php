<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://paymytable.com
 * @since             1.0.0
 * @package           PayMyTable
 *
 * @wordpress-plugin
 * Plugin Name:       PayMyTable
 * Plugin URI:        http://paymytable.com
 * Description:       The PayMyTable plugin for wordpress to activate order and booking on your website
 * Version:           1.0.0
 * Author:            PayMyTable
 * Author URI:        http://paymytable.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       paymytable
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-paymytable-activator.php
 */
function activate_paymytable_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paymytable-activator.php';
	PayMyTable_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-paymytable-deactivator.php
 */
function deactivate_paymytable_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-paymytable-deactivator.php';
	PayMyTable_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_paymytable_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_paymytable_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-paymytable.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_paymytable_plugin() {

	$plugin = new PayMyTable();
	$plugin->run();

}
run_paymytable_plugin();
