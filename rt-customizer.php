<?php
/**
 * Plugin Name: RT Customizer
 * Plugin URI: http://demo.radiustheme.com/
 * Description: A Simple Customizer Framework.
 * Author: RadiusTheme
 * Version: 1.0.0
 * Text Domain: rt-customizer
 * Domain Path: /languages
 * Author URI: https://radiustheme.com/
 *
 * @package RT_Customizer
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'This script cannot be accessed directly.' );
}

define( 'TLP_CUSTOMIZER_VERSION', '1.0.0' );
define( 'TLP_CUSTOMIZER_PLUGIN_PATH', __FILE__ );
define( 'TLP_CUSTOMIZER_PLUGIN_ACTIVE_FILE_NAME', plugin_basename( __FILE__ ) );
define( 'TLP_CUSTOMIZER_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'TLP_CUSTOMIZER_LANGUAGE_PATH', dirname( plugin_basename( __FILE__ ) ) . '/languages' );

/**
 * Autoload.
 */
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * App Init.
 */
if ( ! class_exists( RTCustomizer::class ) ) {
	require_once 'inc/RTCustomizer.php';
}

/**
 * Plugin activation/deactivation action.
 *
 * Plugin activation will not work after "plugins_loaded" hook
 * that's why activation hooks run here.
 */
register_activation_hook( __FILE__, 'activate_rt_customizer' );
register_deactivation_hook( __FILE__, 'deactivate_rt_customizer' );

/**
 * Plugin activation action.
 */
function activate_rt_customizer() {
	\RT\Customizer\Helpers\Install::activate();
}

/**
 * Plugin deactivation action.
 */
function deactivate_rt_customizer() {
	\RT\Customizer\Helpers\Install::deactivate();
}
