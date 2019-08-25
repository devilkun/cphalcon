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

namespace Phalcon\Test\Integration\Db\Dialect\Postgresql;

use IntegrationTester;

class EscapeCest
{
    /**
     * Tests Phalcon\Db\Dialect\Postgresql :: escape()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function dbDialectPostgresqlEscape(IntegrationTester $I)
    {
        $I->wantToTest('Db\Dialect\Postgresql - escape()');
        $I->skipTest('Need implementation');
    }
}
