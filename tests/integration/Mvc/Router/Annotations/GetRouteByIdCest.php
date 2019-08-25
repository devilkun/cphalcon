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

namespace Phalcon\Test\Integration\Mvc\Router\Annotations;

use IntegrationTester;

/**
 * Class GetRouteByIdCest
 */
class GetRouteByIdCest
{
    /**
     * Tests Phalcon\Mvc\Router\Annotations :: getRouteById()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcRouterAnnotationsGetRouteById(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Router\Annotations - getRouteById()');
        $I->skipTest('Need implementation');
    }
}
