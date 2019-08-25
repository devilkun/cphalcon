<?php

namespace Phalcon\Test\Integration\Mvc\Dispatcher\Helper;

use Phalcon\Mvc\Controller;

/**
 * \Phalcon\Test\Integration\Mvc\Dispatcher\Helper\DispatcherTestInitializeForwardController
 * Dispatcher Controller for testing different dispatch scenarios
 *
 * @copyright (c) 2011-2017 Phalcon Team
 * @link          http://www.phalcon.io
 * @author        Andres Gutierrez <andres@phalcon.io>
 * @author        Nikolaos Dimopoulos <nikos@phalcon.io>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalcon.io
 * so that we can send you a copy immediately.
 */
class DispatcherTestInitializeForwardController extends Controller
{
    public function beforeExecuteRoute()
    {
        $this->trace('beforeExecuteRoute-method');
    }

    /**
     * Add tracing information into the current dispatch tracer
     */
    protected function trace($text)
    {
        $this->getDI()->getShared('dispatcherListener')->trace($text);
    }

    public function initialize()
    {
        $this->trace('initialize-method');

        $di = $this->getDI();

        $dispatcher = $di->getShared('dispatcher');

        $dispatcher->forward(
            [
                'controller' => 'dispatcher-test-default',
                'action'     => 'index',
            ]
        );
    }

    public function afterExecuteRoute()
    {
        $this->trace('afterExecuteRoute-method');
    }

    public function indexAction()
    {
        $this->trace('indexAction');
    }
}
