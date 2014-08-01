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
namespace Shopware\Bundle\StoreFrontBundle\Gateway;

use Shopware\Bundle\StoreFrontBundle\Struct;

/**
 * @category  Shopware
 * @package   Shopware\Bundle\StoreFrontBundle\Gateway
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
interface ConfiguratorGatewayInterface
{
    /**
     * The \Shopware\Bundle\StoreFrontBundle\Struct\Configurator\Set requires the following data:
     * - Configurator set
     * - Core attribute of the configurator set
     * - Groups of the configurator set
     * - Options of each group
     *
     * Required translation in the provided context language:
     * - Configurator groups
     * - Configurator options
     *
     * The configurator groups and options has to be sorted in the following order:
     * - Group position
     * - Group name
     * - Option position
     * - Option name
     *
     * @param Struct\ListProduct $product
     * @param Struct\Context $context
     * @return Struct\Configurator\Set
     */
    public function get(Struct\ListProduct $product, Struct\Context $context);

    /**
     * Selects the first possible product image for the provided product configurator.
     * The product images are selected over the image mapping.
     * The image mapping defines which product image should be displayed for which configurator selection.
     * Returns for each configurator option the first possible image
     *
     * @param \Shopware\Bundle\StoreFrontBundle\Struct\ListProduct $product
     * @return Struct\Media[] Indexed by the configurator option id.
     */
    public function getConfiguratorMedia(Struct\ListProduct $product);

    /**
     * Returns all possible configurator combinations for the provided product.
     * The returned array contains as array key the id of the configurator option.
     * The array value contains an imploded array with all possible configurator option ids
     * which can be combined with the option.
     *
     * Example (written with the configurator option names)
     * array(
     *     'white' => array('XL', 'L'),
     *     'red'   => array('S', ...)
     * )
     *
     * @param Struct\ListProduct $product
     * @return array Indexed by the option id
     */
    public function getProductCombinations(Struct\ListProduct $product);
}
