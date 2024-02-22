<?php

namespace Leantime\Plugins\MotivationalQuotes\Services;

use Leantime\Plugins\MotivationalQuotes\Repositories\MotivationalQuotes as MotivationalQuotesRepository;
use Leantime\Plugins\MotivationalQuotes\Models\Quote as QuoteModel;

/**
 * motivational quotes service
 */
class MotivationalQuotes
{
    /**
     * constructor
     *
     * @param MotivationalQuotesRepository $quotesRepo
     */
    public function __construct(
        private readonly MotivationalQuotesRepository $quotesRepo
    )
    {}

    /**
     * get random quote
     *
     * @return QuoteModel
     */
    public function getRandomQuote(): QuoteModel
    {
        $availableQuotes = $this->quotesRepo->getAllQuotes();

        $numberOfQuotes = count($availableQuotes) - 1;
        $randomNumber = rand(0, $numberOfQuotes);

        return $availableQuotes[$randomNumber];
    }
}
