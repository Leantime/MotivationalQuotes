<?php

/**
 * MotivationalQuotes
 *
 * Register Events here
 */

use \Leantime\Core\Events;
use \Leantime\Plugins\MotivationalQuotes\Services\MotivationalQuotes;

Events::add_event_listener(
    // Register event listener.
    "leantime.core.template.dispatchTplHook.afterGreeting",
    // Create function for the event.
    function ($payload) {
        /** @var MotivationalQuotes $motivationalQuotesSvc */
        $motivationalQuotesSvc = app()->make(MotivationalQuotes::class);
        $randomQuote = $motivationalQuotesSvc->getRandomQuote();

        echo "<div style='padding:10px 0'><div class='center'><span style='color:var(--main-titles-color);'>";
        echo "<p>Quote of the day:</p>";
        echo "<p style='font-style: italic; font-weight:normal;'><i class='fa-solid fa-quote-left'></i> " . $randomQuote->quote . "</p>";
        echo "<small>- " . $randomQuote->author . "</small>";
        echo "</span></div></div>";
    },
    // Priority
    5
);
