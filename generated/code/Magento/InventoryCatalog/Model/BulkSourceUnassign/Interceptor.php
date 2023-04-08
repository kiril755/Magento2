<?php
namespace Magento\InventoryCatalog\Model\BulkSourceUnassign;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\BulkSourceUnassign
 */
class Interceptor extends \Magento\InventoryCatalog\Model\BulkSourceUnassign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Model\BulkSourceUnassignValidatorInterface $unassignValidator, \Magento\InventoryCatalog\Model\ResourceModel\BulkSourceUnassign $bulkSourceUnassign, \Magento\InventoryCatalogApi\Api\DefaultSourceProviderInterface $defaultSourceProvider, \Magento\InventoryCatalog\Model\GetProductIdsBySkus $getProductIdsBySkus, \Magento\InventoryIndexer\Indexer\Source\SourceIndexer $sourceIndexer, \Magento\CatalogInventory\Model\Indexer\Stock $legacyIndexer)
    {
        $this->___init();
        parent::__construct($unassignValidator, $bulkSourceUnassign, $defaultSourceProvider, $getProductIdsBySkus, $sourceIndexer, $legacyIndexer);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $skus, array $sourceCodes) : int
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($skus, $sourceCodes);
    }
}
