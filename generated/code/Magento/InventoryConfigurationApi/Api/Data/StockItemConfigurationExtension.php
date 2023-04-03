<?php
namespace Magento\InventoryConfigurationApi\Api\Data;

/**
 * Extension class for @see \Magento\InventoryConfigurationApi\Api\Data\StockItemConfigurationInterface
 */
class StockItemConfigurationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements StockItemConfigurationExtensionInterface
{
    /**
     * @return boolean|null
     */
    public function getIsInStock()
    {
        return $this->_get('is_in_stock');
    }

    /**
     * @param boolean $isInStock
     * @return $this
     */
    public function setIsInStock($isInStock)
    {
        $this->setData('is_in_stock', $isInStock);
        return $this;
    }
}
