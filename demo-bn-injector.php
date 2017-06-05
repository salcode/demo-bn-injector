<?php
/**
 * Plugin Name: Demo Bright Nucleus Injector Component
 * Plugin URI: https://github.com/salcode/demo-bn-injector
 * Description: A demo plugin exploring the user of the Bright Nucleus Injector Component.
 * Version: 0.1.0
 * Author: Sal Ferrarello
 * Author URI: http://salferrarello.com/
 * Text Domain: demo-bn-injector
 * Domain Path: /languages
 *
 * @package Fe\DemoBNInjector
 */

declare( strict_types = 1 );

namespace Fe\DemoBNInjector;

use BrightNucleus\Config\ConfigFactory;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Composer autoloader.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$configFile = __DIR__ . '/config/defaults.php';
$config     = ConfigFactory::createSubConfig($configFile, 'FeDemoInjector\Cube');
$cube       = new Cube( $config );
$volume     = $cube->volume(); // $volume gets a value of 6000 based on config values 10, 20, 30.
