<?php
namespace Elixant\Utility;

/**
 * @package     Elixant Platform
 * @subpackage  Utility
 * @copyright   2018 Elixant Technology Ltd.
 * @author      Zander Schmautz <zander.schmautz@elixant.ca>
 * @version     1.0.0
 * @license     MIT License
 */
use Elixant\Base\Platform;

class ServiceProvider
{
    protected $platform;
    
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * The paths that should be published.
     *
     * @var array
     */
    public static $publishes = [];
    
    /**
     * The paths that should be published by group.
     *
     * @var array
     */
    public static $publishGroups = [];
    
    public $singletons = [];
    
    public $bindings = [];
    
    /**
     * Create a new service provider instance.
     *
     * @param Platform $platform
     */
    public function __construct(Platform $platform)
    {
        $this->platform = $platform;
    }
}