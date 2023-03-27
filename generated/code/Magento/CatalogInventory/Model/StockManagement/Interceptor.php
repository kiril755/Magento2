<?php
namespace Magento\CatalogInventory\Model\StockManagement;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockManagement
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\ResourceModel\Stock $stockResource, \Magento\CatalogInventory\Model\Spi\StockRegistryProviderInterface $stockRegistryProvider, \Magento\CatalogInventory\Model\StockState $stockState, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\CatalogInventory\Model\ResourceModel\QtyCounterInterface $qtyCounter, ?\Magento\CatalogInventory\Model\StockRegistryStorage $stockRegistryStorage = null)
    {
        $this->___init();
        parent::__construct($stockResource, $stockRegistryProvider, $stockState, $stockConfiguration, $productRepository, $qtyCounter, $stockRegistryStorage);
    }

    /**
     * {@inheritdoc}
     */
    public function registerProductsSale($items, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerProductsSale');
        return $pluginInfo ? $this->___callPlugins('registerProductsSale', func_get_args(), $pluginInfo) : parent::registerProductsSale($items, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function revertProductsSale($items, $websiteId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'revertProductsSale');
        return $pluginInfo ? $this->___callPlugins('revertProductsSale', func_get_args(), $pluginInfo) : parent::revertProductsSale($items, $websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function backItemQty($productId, $qty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'backItemQty');
        return $pluginInfo ? $this->___callPlugins('backItemQty', func_get_args(), $pluginInfo) : parent::backItemQty($productId, $qty, $scopeId);
    }
}
