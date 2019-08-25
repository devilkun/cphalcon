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

namespace Phalcon\Test\Unit\Flash;

use UnitTester;

class GetEscaperServiceCest
{
    /**
     * Tests Phalcon\Flash :: getEscaperService()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function flashGetEscaperService(UnitTester $I)
    {
        $I->wantToTest('Flash - getEscaperService()');

        $I->skipTest('Need implementation');
    }
}
