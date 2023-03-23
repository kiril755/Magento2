<?php
namespace Magento\InventoryConfiguration\Model\GetStockItemConfiguration;

/**
 * Interceptor class for @see \Magento\InventoryConfiguration\Model\GetStockItemConfiguration
 */
class Interceptor extends \Magento\InventoryConfiguration\Model\GetStockItemConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryConfiguration\Model\GetLegacyStockItem $getLegacyStockItem, \Magento\InventoryConfiguration\Model\StockItemConfigurationFactory $stockItemConfigurationFactory, \Magento\InventoryApi\Model\IsProductAssignedToStockInterface $isProductAssignedToStock, \Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForSkuInterface $isSourceItemManagementAllowedForSku)
    {
        $this->___init();
        parent::__construct($getLegacyStockItem, $stockItemConfigurationFactory, $isProductAssignedToStock, $defaultStockProvider, $isSourceItemManagementAllowedForSku);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : \Magento\InventoryConfigurationApi\Api\Data\StockItemConfigurationInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
