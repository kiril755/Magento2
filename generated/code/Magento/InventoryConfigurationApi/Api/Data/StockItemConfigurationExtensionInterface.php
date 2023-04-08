<?php
namespace Magento\InventoryConfigurationApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\InventoryConfigurationApi\Api\Data\StockItemConfigurationInterface
 */
interface StockItemConfigurationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return boolean|null
     */
    public function getIsInStock();

    /**
     * @param boolean $isInStock
     * @return $this
     */
    public function setIsInStock($isInStock);
}
