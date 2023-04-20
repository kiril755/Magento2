<?php
namespace Magento\InventoryConfiguration\Model\GetLegacyStockItem;

/**
 * Interceptor class for @see \Magento\InventoryConfiguration\Model\GetLegacyStockItem
 */
class Interceptor extends \Magento\InventoryConfiguration\Model\GetLegacyStockItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\Data\StockItemInterfaceFactory $stockItemFactory, \Magento\CatalogInventory\Api\StockItemCriteriaInterfaceFactory $legacyStockItemCriteriaFactory, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $legacyStockItemRepository, \Magento\InventoryCatalogApi\Model\GetProductIdsBySkusInterface $getProductIdsBySkus, ?\Magento\InventoryConfiguration\Model\LegacyStockItem\CacheStorage $cacheStorage = null)
    {
        $this->___init();
        parent::__construct($stockItemFactory, $legacyStockItemCriteriaFactory, $legacyStockItemRepository, $getProductIdsBySkus, $cacheStorage);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku) : \Magento\CatalogInventory\Api\Data\StockItemInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function getLegacyStockItemBySku(string $sku) : \Magento\CatalogInventory\Api\Data\StockItemInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLegacyStockItemBySku');
        return $pluginInfo ? $this->___callPlugins('getLegacyStockItemBySku', func_get_args(), $pluginInfo) : parent::getLegacyStockItemBySku($sku);
    }
}
