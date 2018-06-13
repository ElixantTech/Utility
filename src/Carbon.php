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
use JsonSerializable;
use Carbon\Carbon as BaseCarbon;
use Elixant\Utility\Traits\Macroable;

class Carbon extends BaseCarbon implements JsonSerializable
{
    use Macroable;
    
    /**
     * The custom Carbon JSON serializer.
     *
     * @var callable|null
     */
    protected static $serializer;
    
    /**
     * Prepare the object for JSON serialization.
     *
     * @return array|string
     */
    public function jsonSerialize()
    {
        if (static::$serializer) {
            return call_user_func(static::$serializer, $this);
        }
        
        $carbon = $this;
        
        return call_user_func(function () use ($carbon) {
            return get_object_vars($carbon);
        });
    }
    
    /**
     * JSON serialize all Carbon instances using the given callback.
     *
     * @param  callable  $callback
     * @return void
     */
    public static function serializeUsing($callback)
    {
        static::$serializer = $callback;
    }
}