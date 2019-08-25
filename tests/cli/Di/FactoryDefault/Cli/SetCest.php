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

namespace Phalcon\Test\Cli\Di\FactoryDefault\Cli;

use CliTester;

class SetCest
{
    /**
     * Tests Phalcon\Di\FactoryDefault\Cli :: set()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function diFactorydefaultCliSet(CliTester $I)
    {
        $I->wantToTest('Di\FactoryDefault\Cli - set()');
        $I->skipTest('Need implementation');
    }
}
