<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://au.linkedin.com/in/yamuaryal
 * @since      1.0.0
 *
 * @package    Cto_Acf
 * @subpackage Cto_Acf/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cto_Acf
 * @subpackage Cto_Acf/includes
 * @author     Yamu Aryal <yamuaryal@gmail.com>
 */
class Cto_Acf_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cto-acf',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
