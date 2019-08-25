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

namespace Phalcon\Test\Unit\Crypt;

use UnitTester;

class UseSigningCest
{
    /**
     * Tests Phalcon\Crypt :: useSigning()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2019-04-16
     */
    public function cryptUseSigning(UnitTester $I)
    {
        $I->wantToTest('Crypt - useSigning()');

        $I->skipTest('Need implementation');
    }
}
