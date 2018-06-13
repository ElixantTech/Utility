<?php
namespace Elixant\Utility\Contracts;

/**
 * @package     Elixant Platform
 * @subpackage  Utility
 * @copyright   2018 Elixant Technology Ltd.
 * @author      Zander Schmautz <zander.schmautz@elixant.ca>
 * @version     1.0.0
 * @license     MIT License
 */
interface MessageProvider
{
    /**
     * Get the messages for the instance.
     *
     * @return \Illuminate\Contracts\Support\MessageBag
     */
    public function getMessageBag();
}