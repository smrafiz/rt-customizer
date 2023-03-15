<?php
/**
 * Main initialization class.
 *
 * @package RT_Customizer
 */

use RT\Customizer\Helpers as Helpers;
use RT\Customizer\Traits\SingletonTrait;
use RT\Customizer\Controllers as Controllers;

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

if ( ! class_exists( RTCustomizer::class ) ) {
	/**
	 * Main initialization class.
	 */
	final class RTCustomizer {

		use SingletonTrait;

		/**
		 * Options.
		 *
		 * @var array
		 */
		public $options = [];

		/**
		 * Class init.
		 *
		 * @return void
		 */
		protected function init() {
			// Defaults.
			$this->defaults();

			// Hooks.
			$this->initHooks();
		}

		/**
		 * Defaults
		 *
		 * @return void
		 */
		private function defaults() {
		}

		/**
		 * Init Hooks.
		 *
		 * @return void
		 */
		private function initHooks() {
			\add_action( 'plugins_loaded', [ $this, 'onPluginsLoaded' ], -1 );
			\add_action( 'init', [ $this, 'initialize' ], 0 );
		}

		/**
		 * Init Hooks.
		 *
		 * @return void
		 */
		public function initialize() {
			\do_action( 'rt_customizer_init' );

			// Text Domain.
			$this->i18n();

			// Controller Init.
			Helpers\Fns::instances( $this->controllers() );
		}

		/**
		 * Load plugin text domain.
		 *
		 * @return void
		 */
		public function i18n() {
			load_plugin_textdomain( 'rt-customizer', false, TLP_CUSTOMIZER_LANGUAGE_PATH );
		}

		/**
		 * Controllers.
		 *
		 * @return array
		 */
		public function controllers() {
			$controllers = [];

//			if ( is_admin() ) {
//				$controllers[] = Controllers\AdminController::class;
//			}
//
//			$controllers[] = Controllers\PostTypesController::class;
//			$controllers[] = Controllers\ScriptsController::class;
//			$controllers[] = Controllers\AjaxController::class;
//			$controllers[] = Controllers\WidgetsController::class;
//			$controllers[] = Controllers\FrontendController::class;
//			$controllers[] = Controllers\GutenbergController::class;

			return $controllers;
		}

		/**
		 * Actions on Plugins Loaded.
		 *
		 * @return void
		 */
		public function onPluginsLoaded() {
			\do_action( 'rt_customizer_loaded' );
		}

		/**
		 * Plugin path.
		 *
		 * @return string
		 */
		public function pluginPath() {
			return untrailingslashit( plugin_dir_path( TLP_CUSTOMIZER_PLUGIN_PATH ) );
		}

		/**
		 * Assets URL.
		 *
		 * @return string
		 */
		public function assetsUrl() {
			return esc_url( TLP_CUSTOMIZER_PLUGIN_URL . '/assets/' );
		}
	}

	/**
	 * Returns RTCustomizer.
	 *
	 * @return RTCustomizer
	 */
	function rtCustomizer() {
		return RTCustomizer::get_instance();
	}

	/**
	 * App Init.
	 */
	rtCustomizer();
}
