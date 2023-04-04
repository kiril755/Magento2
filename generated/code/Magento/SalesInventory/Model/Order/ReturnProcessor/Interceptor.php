<?php
namespace Magento\SalesInventory\Model\Order\ReturnProcessor;

/**
 * Interceptor class for @see \Magento\SalesInventory\Model\Order\ReturnProcessor
 */
class Interceptor extends \Magento\SalesInventory\Model\Order\ReturnProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Api\StockManagementInterface $stockManagement, \Magento\CatalogInventory\Model\Indexer\Stock\Processor $stockIndexer, \Magento\Catalog\Model\Indexer\Product\Price\Processor $priceIndexer, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Sales\Api\OrderItemRepositoryInterface $orderItemRepository)
    {
        $this->___init();
        parent::__construct($stockManagement, $stockIndexer, $priceIndexer, $storeManager, $orderItemRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Sales\Api\Data\CreditmemoInterface $creditmemo, \Magento\Sales\Api\Data\OrderInterface $order, array $returnToStockItems = [], $isAutoReturn = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($creditmemo, $order, $returnToStockItems, $isAutoReturn);
    }
}
