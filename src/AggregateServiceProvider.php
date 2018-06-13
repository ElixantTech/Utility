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
class AggregateServiceProvider extends ServiceProvider
{
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [];
    
    /**
     * An array of the service provider instances.
     *
     * @var array
     */
    protected $instances = [];
    
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->instances = [];
        
        foreach ($this->providers as $provider) {
            $this->instances[] = $this->platform->register($provider);
        }
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        $provides = [];
        
        foreach ($this->providers as $provider) {
            $instance = $this->platform->resolveProvider($provider);
            
            $provides = array_merge($provides, $instance->provides());
        }
        
        return $provides;
    }
}