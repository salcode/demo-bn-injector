<?php
/**
 * Demo Bright Nucleus Config SimpleDependency class.
 *
 * @package   Fe\DemoBNInjector
 * @author    Sal Ferrarello
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Fe\DemoBNInjector;

use BrightNucleus\Config\ConfigInterface;

/**
 * Demo Bright Nucleus Config SimpleDependency class
 */

class SimpleDependency
{
    use \BrightNucleus\Config\ConfigTrait;

    public $dep;

    public function __construct(stdClass $obj)
    {
        $this->dep = $obj;
    }
}
