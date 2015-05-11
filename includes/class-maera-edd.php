<?php

/**
 * The main Maera_EDD class
 */
class Maera_EDD {

	private static $instance;

	/**
	* Get the class instance
	*/
	public static function get_instance() {

		if ( null == self::$instance ) {
			self::$instance = new self;
		}

		return self::$instance;
	}

	private function __construct() {

		if ( ! defined( 'MAERA_EDD_FILE' ) ) { define( 'MAERA_EDD_FILE', __FILE__ ); }
		if ( ! defined( 'MAERA_EDD_PATH' ) ) { define( 'MAERA_EDD_PATH', dirname( __FILE__ ) ); }
		if ( ! defined( 'MAERA_EDD_URL' ) ) { define( 'MAERA_EDD_URL', plugin_dir_url( __FILE__ ) ); }

		$maera_edd_timber        = new Maera_EDD_Timber();
		$maera_edd_customizer    = new Maera_EDD_Customizer();
		$maera_edd_shortcodes    = new Maera_EDD_Shortcodes();
		$maera_edd_scripts       = new Maera_EDD_Scripts();
		$maera_edd_mods          = new Maera_EDD_Mods();
		$maera_edd_compatibility = new Maera_EDD_Compatibility();

	}

}
