<?php

namespace Leantime\Plugins\MotivationalQuotes\Models;

/**
 * quote model
 *
 * @package Leantime\Plugins\MotivationalQuotes\Models
 */
class Quote
{
    /**
     * Construct
     *
     * @param string $quote
     * @param string $author
     */
    public function __construct(
        public string $quote = "",
        public string $author = ""
    )
    {}
}
