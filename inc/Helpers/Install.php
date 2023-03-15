<?php
/**
 * Activation & Deactivation actions.
 *
 * @package RT_Customizer
 */

namespace RT\Customizer\Helpers;

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

/**
 * Activation & Deactivation actions.
 */
class Install {
	/**
	 * Activation actions.
	 *
	 * @return void
	 */
	public static function activate() {
		$get_activation_time = strtotime( 'now' );

		add_option( 'rt_customizer_plugin_activation_time', $get_activation_time );

		\flush_rewrite_rules();
	}

	/**
	 * Deactivation actions.
	 *
	 * @return void
	 */
	public static function deactivate() {
		\flush_rewrite_rules();
	}
}
