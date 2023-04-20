<?php
namespace Magento\InventoryInStorePickupApi\Api\Data;

/**
 * Extension class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequestInterface
 */
class SearchRequestExtension extends \Magento\Framework\Api\AbstractSimpleObject implements SearchRequestExtensionInterface
{
    /**
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface[]|null
     */
    public function getProductsInfo()
    {
        return $this->_get('products_info');
    }

    /**
     * @param \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoInterface[] $productsInfo
     * @return $this
     */
    public function setProductsInfo($productsInfo)
    {
        $this->setData('products_info', $productsInfo);
        return $this;
    }
}
