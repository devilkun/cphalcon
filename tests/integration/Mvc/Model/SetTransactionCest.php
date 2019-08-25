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

namespace Phalcon\Test\Integration\Mvc\Model;

use IntegrationTester;

/**
 * Class SetTransactionCest
 */
class SetTransactionCest
{
    /**
     * Tests Phalcon\Mvc\Model :: setTransaction()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcModelSetTransaction(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Model - setTransaction()');
        $I->skipTest('Need implementation');
    }
}
