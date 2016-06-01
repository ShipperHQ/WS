<?php
/**
 *
 * ShipperHQ Shipping Module
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * Shipper HQ Shipping
 *
 * @category ShipperHQ
 * @package ShipperHQ_Shipping_Carrier
 * @copyright Copyright (c) 2014 Zowta LLC (http://www.ShipperHQ.com)
 * @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @author ShipperHQ Team sales@shipperhq.com
 */
namespace ShipperHQ\WS\Rate\Request\Checkout;

/**
 * Class StockDetail
 *
 * @package ShipperHQ\Shipping
 */
class StockDetail {

    protected $inventoryCount;

    protected $availabilityDate;

    protected $inStock;

    function __construct($inventoryCount = null, $availabilityDate = null, $inStock = null)
    {
        $this->inventoryCount = $inventoryCount;
        $this->availabilityDate = $availabilityDate;
        $this->inStock = $inStock;
    }

    /**
     * @return null
     */
    public function getInventoryCount()
    {
        return $this->inventoryCount;
    }

    /**
     * @param null $inventoryCount
     */
    public function setInventoryCount($inventoryCount)
    {
        $this->inventoryCount = $inventoryCount;
    }

    /**
     * @return null
     */
    public function getAvailabilityDate()
    {
        return $this->availabilityDate;
    }

    /**
     * @param null $availabilityDate
     */
    public function setAvailabilityDate($availabilityDate)
    {
        $this->availabilityDate = $availabilityDate;
    }

    /**
     * @return null
     */
    public function getInStock()
    {
        return $this->inStock;
    }

    /**
     * @param null $inStock
     */
    public function setInStock($inStock)
    {
        $this->inStock = $inStock;
    }


}