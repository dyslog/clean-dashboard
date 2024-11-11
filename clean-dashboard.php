<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://gabrieljoffe.com
 * @since             1.0.0
 * @package           Clean_Dashboard
 *
 * @wordpress-plugin
 * Plugin Name:       Clean Dashboard
 * Plugin URI:        gabrieljoffe.com
 * Description:       Cleaner for dashboard
 * Version:           1
 * Author:            Gabriel Joffe
 * Author URI:        gabrieljoffe.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       clean-dashboard
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CLEAN_DASHBOARD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-clean-dashboard-activator.php
 */
function activate_clean_dashboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-clean-dashboard-activator.php';
	Clean_Dashboard_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-clean-dashboard-deactivator.php
 */
function deactivate_clean_dashboard() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-clean-dashboard-deactivator.php';
	Clean_Dashboard_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_clean_dashboard' );
register_deactivation_hook( __FILE__, 'deactivate_clean_dashboard' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-clean-dashboard.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_clean_dashboard() {

	$plugin = new Clean_Dashboard();
	$plugin->run();

}
run_clean_dashboard();

    