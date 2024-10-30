<?php

/**
 * 
 *
 * @since             1.0.0
 * @package           Cto_Acf
 * @wordpress-plugin
 * Plugin Name:       Conditional Taxonomy Option
 * Description:       This plugin will allow user to use the ACF taxonomy in conditional logic.
 * Version:           1.0.0
 * Author:            Yamu Aryal
 * Author URI:        https://au.linkedin.com/in/yamuaryal
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cto-acf
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 */
define( 'CTO_ACF_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cto-acf-activator.php
 */
function activate_cto_acf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cto-acf-activator.php';
	Cto_Acf_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cto-acf-deactivator.php
 */
function deactivate_cto_acf() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cto-acf-deactivator.php';
	Cto_Acf_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cto_acf' );
register_deactivation_hook( __FILE__, 'deactivate_cto_acf' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cto-acf.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cto_acf() {

	$plugin = new Cto_Acf();
	$plugin->run();

}
run_cto_acf();
