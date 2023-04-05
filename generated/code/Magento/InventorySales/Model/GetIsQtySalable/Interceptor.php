<?php
namespace Magento\InventorySales\Model\GetIsQtySalable;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetIsQtySalable
 */
class Interceptor extends \Magento\InventorySales\Model\GetIsQtySalable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventorySalesApi\Model\GetStockItemDataInterface $getStockItemData, \Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForProductTypeInterface $isSourceItemManagementAllowedForProductType, \Magento\InventoryCatalogApi\Model\GetProductTypesBySkusInterface $getProductTypesBySkus, \Magento\InventorySalesApi\Model\GetSalableQtyInterface $getProductQtyInStock)
    {
        $this->___init();
        parent::__construct($getStockItemData, $isSourceItemManagementAllowedForProductType, $getProductTypesBySkus, $getProductQtyInStock);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
