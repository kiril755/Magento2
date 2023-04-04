<?php
namespace Magento\InventoryCatalog\Model\BulkInventoryTransfer;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\BulkInventoryTransfer
 */
class Interceptor extends \Magento\InventoryCatalog\Model\BulkInventoryTransfer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Model\BulkInventoryTransferValidatorInterface $inventoryTransferValidator, \Magento\InventoryCatalog\Model\ResourceModel\BulkInventoryTransfer $bulkInventoryTransfer, \Magento\InventoryIndexer\Indexer\Source\SourceIndexer $sourceIndexer, \Magento\InventoryCatalogApi\Api\DefaultSourceProviderInterface $defaultSourceProvider, \Magento\InventoryCatalogApi\Model\GetProductIdsBySkusInterface $getProductIdsBySkus, \Magento\CatalogInventory\Model\Indexer\Stock $legacyIndexer, \Magento\InventoryCatalog\Model\GetSourceItemsBySkuAndSourceCodes $getSourceItemsBySkuAndSourceCodes, \Magento\InventoryCatalog\Model\ResourceModel\SetDataToLegacyStockStatus $setDataToLegacyStockStatus, \Magento\InventoryCatalog\Model\ResourceModel\SetDataToLegacyStockItem $setDataToLegacyStockItem)
    {
        $this->___init();
        parent::__construct($inventoryTransferValidator, $bulkInventoryTransfer, $sourceIndexer, $defaultSourceProvider, $getProductIdsBySkus, $legacyIndexer, $getSourceItemsBySkuAndSourceCodes, $setDataToLegacyStockStatus, $setDataToLegacyStockItem);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $skus, string $originSource, string $destinationSource, bool $unassignFromOrigin) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($skus, $originSource, $destinationSource, $unassignFromOrigin);
    }
}
