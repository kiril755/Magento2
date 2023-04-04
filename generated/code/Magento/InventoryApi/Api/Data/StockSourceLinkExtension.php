<?php
namespace Magento\InventoryApi\Api\Data;

/**
 * Extension class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
 */
class StockSourceLinkExtension extends \Magento\Framework\Api\AbstractSimpleObject implements StockSourceLinkExtensionInterface
{
    /**
     * @return string|null
     */
    public function getSourceName()
    {
        return $this->_get('source_name');
    }

    /**
     * @param string $sourceName
     * @return $this
     */
    public function setSourceName($sourceName)
    {
        $this->setData('source_name', $sourceName);
        return $this;
    }
}
