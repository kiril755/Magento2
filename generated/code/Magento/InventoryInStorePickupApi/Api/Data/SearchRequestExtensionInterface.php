<?php
namespace Magento\InventoryInStorePickupApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequestInterface
 */
interface SearchRequestExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface[]|null
     */
    public function getProductsInfo();

    /**
     * @param \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface[] $productsInfo
     * @return $this
     */
    public function setProductsInfo($productsInfo);
}
