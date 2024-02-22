<?php

namespace Leantime\Plugins\MotivationalQuotes\Controllers;

use Leantime\Core\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Settings Controller for Motivational Quotes Plugin
 *
 * @package    leantime
 * @subpackage plugins
 */
class Settings extends Controller
{
    /**
     * init
     *
     * @return void
     */
    public function init(): void
    {
    }

    /**
     * get
     *
     * @return Response
     *
     * @throws \Exception
     */
    public function get(): Response
    {
        return $this->tpl->display("motivationalQuotes.settings");
    }

    /**
     * post
     *
     * @param array $params
     * @return void
     */
    public function post(array $params): void
    {
    }
}
