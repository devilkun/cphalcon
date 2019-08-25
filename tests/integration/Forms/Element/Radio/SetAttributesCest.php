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

namespace Phalcon\Test\Integration\Forms\Element\Radio;

use IntegrationTester;

/**
 * Class SetAttributesCest
 */
class SetAttributesCest
{
    /**
     * Tests Phalcon\Forms\Element\Radio :: setAttributes()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function formsElementRadioSetAttributes(IntegrationTester $I)
    {
        $I->wantToTest('Forms\Element\Radio - setAttributes()');
        $I->skipTest('Need implementation');
    }
}
