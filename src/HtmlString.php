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
class HtmlString implements Htmlable
{
    /**
     * The HTML string.
     *
     * @var string
     */
    protected $html;
    
    /**
     * Create a new HTML string instance.
     *
     * @param  string  $html
     * @return void
     */
    public function __construct($html)
    {
        $this->html = $html;
    }
    
    /**
     * Get the HTML string.
     *
     * @return string
     */
    public function toHtml()
    {
        return $this->html;
    }
    
    /**
     * Get the HTML string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->toHtml();
    }
}