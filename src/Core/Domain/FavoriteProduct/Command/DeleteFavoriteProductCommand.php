<?php
/**
 * 2007-2019 PrestaShop and Contributors
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

namespace PrestaShop\Module\FavoriteProducts\Core\Domain\FavoriteProduct\Command;

use PrestaShop\Module\FavoriteProducts\Core\Domain\Customer\ValueObject\CustomerId;
use PrestaShop\Module\FavoriteProducts\Core\Domain\Product\ValueObject\ProductId;
use PrestaShop\Module\FavoriteProducts\Core\Domain\Shop\ValueObject\ShopId;

/**
 * Delete a product of customer product favorites
 */
class DeleteFavoriteProductCommand
{
    /**
     * @var CustomerId
     */
    private $customerId;

    /**
     * @var ProductId
     */
    private $productId;

    /**
     * @var ShopId
     */
    private $shopId;

    /**
     * @param int $customerId
     * @param int $productId
     * @param int $shopId
     */
    public function __construct($customerId, $productId, $shopId)
    {
        $this->customerId = new CustomerId($customerId);
        $this->productId = new ProductId($productId);
        $this->shopId = new ShopId($shopId);
    }

    /**
     * @return CustomerId
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return ProductId
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return ShopId
     */
    public function getShopId()
    {
        return $this->shopId;
    }
}
