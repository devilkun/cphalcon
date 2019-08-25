<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Session\Manager;

use IntegrationTester;
use Phalcon\Session\Manager;
use Phalcon\Test\Fixtures\Traits\DiTrait;
use Phalcon\Test\Fixtures\Traits\SessionTrait;

class UnderscoreIssetCest
{
    use DiTrait;
    use SessionTrait;

    /**
     * Tests Phalcon\Session\Manager :: __isset()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function sessionManagerUnderscoreIsset(IntegrationTester $I)
    {
        $I->wantToTest('Session\Manager - __isset()');
        $manager = new Manager();
        $files   = $this->getSessionStream();
        $manager->setHandler($files);

        $actual = $manager->start();
        $I->assertTrue($actual);

        $actual = isset($manager->test);
        $I->assertFalse($actual);

        $manager->set('test', 'myval');
        $actual = isset($manager->test);
        $I->assertTrue($actual);

        $manager->destroy();

        $actual = $manager->exists();
        $I->assertFalse($actual);
    }
}
