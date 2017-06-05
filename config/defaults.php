<?php
/**
 * Demo Bright Nucleus Injector Component configuration file
 *
 * @package   Fe\DemoBNInjector
 * @author    Sal Ferrarello
 * @license   GPL-2.0+
 */

/*
 * Example settings for class cube.
 */
$cube = [
	'length' => 10,
	'width'  => 20,
	'height' => 30,
];

return [
	'FeDemoInjector' => [
		'Cube' => $cube,
	],
];
