<?php
namespace Magento\InventoryApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\StockSourceLinkInterface
 */
interface StockSourceLinkExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getSourceName();

    /**
     * @param string $sourceName
     * @return $this
     */
    public function setSourceName($sourceName);
}
