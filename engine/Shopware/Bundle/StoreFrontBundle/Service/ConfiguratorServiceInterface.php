<?php
/**
 * Shopware 4
 * Copyright © shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Bundle\StoreFrontBundle\Service;

use Shopware\Bundle\StoreFrontBundle\Struct;

/**
 * @category  Shopware
 * @package   Shopware\Bundle\StoreFrontBundle\Service
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
interface ConfiguratorServiceInterface
{
    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Bundle\StoreFrontBundle\Gateway\ProductConfigurationGatewayInterface::get()
     *
     * @param Struct\ListProduct $product
     * @param Struct\Context $context
     * @return Struct\Configurator\Group[]
     */
    public function getProductConfiguration(Struct\ListProduct $product, Struct\Context $context);

    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Bundle\StoreFrontBundle\Gateway\ProductConfigurationGatewayInterface::getList()
     *
     * @param Struct\ListProduct[] $products
     * @param Struct\Context $context
     * @return array Each array element contains a Struct\Configurator\Group[] array. The first level is indexed with the product number
     */
    public function getProductsConfigurations($products, Struct\Context $context);

    /**
     * To get detailed information about the selection conditions, structure and content of the returned object,
     * please refer to the linked classes.
     *
     * @see \Shopware\Bundle\StoreFrontBundle\Gateway\ConfiguratorGatewayInterface::get()
     *
     * @param Struct\ListProduct $product
     * @param Struct\Context $context
     * @param array $selection
     * @return Struct\Configurator\Set
     */
    public function getProductConfigurator(Struct\ListProduct $product, Struct\Context $context, array $selection);
}