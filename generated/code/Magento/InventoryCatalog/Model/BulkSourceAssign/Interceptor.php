<?php
namespace Magento\InventoryCatalog\Model\BulkSourceAssign;

/**
 * Interceptor class for @see \Magento\InventoryCatalog\Model\BulkSourceAssign
 */
class Interceptor extends \Magento\InventoryCatalog\Model\BulkSourceAssign implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Model\BulkSourceAssignValidatorInterface $assignValidator, \Magento\InventoryCatalog\Model\ResourceModel\BulkSourceAssign $bulkSourceAssign, \Magento\InventoryIndexer\Indexer\SourceItem\SourceItemIndexer $sourceItemIndexer)
    {
        $this->___init();
        parent::__construct($assignValidator, $bulkSourceAssign, $sourceItemIndexer);
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
