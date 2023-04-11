<?php
namespace Magento\InventoryAdminUi\Ui\DataProvider\StockDataProvider;

/**
 * Interceptor class for @see \Magento\InventoryAdminUi\Ui\DataProvider\StockDataProvider
 */
class Interceptor extends \Magento\InventoryAdminUi\Ui\DataProvider\StockDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Framework\Api\Search\ReportingInterface $reporting, \Magento\Framework\Api\Search\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\InventoryApi\Api\StockRepositoryInterface $stockRepository, \Magento\Ui\DataProvider\SearchResultFactory $searchResultFactory, \Magento\InventoryApi\Api\GetStockSourceLinksInterface $getStockSourceLinks, \Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, \Magento\Framework\Api\SearchCriteriaBuilder $apiSearchCriteriaBuilder, \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder, \Magento\InventoryApi\Api\GetSourcesAssignedToStockOrderedByPriorityInterface $getSourcesAssignedToStockOrderedByPriority, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksExtensionAttributes $stockSourceLinksExtensionAttributes = null, ?int $assignedSourcesLimit = 100)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $reporting, $searchCriteriaBuilder, $request, $filterBuilder, $stockRepository, $searchResultFactory, $getStockSourceLinks, $sourceRepository, $apiSearchCriteriaBuilder, $sortOrderBuilder, $getSourcesAssignedToStockOrderedByPriority, $meta, $data, $pool, $logger, $stockSourceLinksExtensionAttributes, $assignedSourcesLimit);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
