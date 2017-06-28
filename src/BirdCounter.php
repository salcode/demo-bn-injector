<?php
/**
 * Demo Bright Nucleus Config Cube class.
 *
 * @package   Fe\DemoBNInjector
 * @author    Sal Ferrarello
 * @license   GPL-2.0+
 */

declare( strict_types = 1 );

namespace Fe\DemoBNInjector;

use BrightNucleus\Config\ConfigInterface;

/**
 * Demo Bright Nucleus Config Cube class
 */

class Cube
{
    use \BrightNucleus\Config\ConfigTrait;

    protected $length;
    protected $width;
    protected $height;

    public function __construct(ConfigInterface $config = null)
    {
        $this->processConfig($config);
        $this->length = $config['length'];
        $this->width  = $config['width'];
        $this->height = $config['height'];
    }

    public function volume()
    {
        return $this->length * $this->width * $this->height;
    }
}
