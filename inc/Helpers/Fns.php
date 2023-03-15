<?php
/**
 * Helpers class.
 *
 * @package RT_Customizer
 */

namespace RT\Customizer\Helpers;

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

/**
 * Helpers class.
 */
class Fns {
	/**
	 * Classes instantiation.
	 *
	 * @param array $classes Classes to init.
	 *
	 * @return void
	 */
	public static function instances( array $classes ) {
		if ( empty( $classes ) ) {
			return;
		}

		foreach ( $classes as $class ) {
			$class::get_instance();
		}
	}

	/**
	 * Checks if WooCommerce installed
	 *
	 * @return boolean
	 */
	public static function isWcActive() {
		return class_exists( 'WooCommerce' );
	}
}
