<?php
namespace Magento\Reports\Model\ResourceModel\Wishlist\Product\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Wishlist\Product\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Wishlist\Product\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Sales\Helper\Admin $adminhtmlSales, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Wishlist\Model\Config $wishlistConfig, \Magento\Catalog\Model\Product\Visibility $productVisibility, \Magento\Framework\App\ResourceConnection $coreResource, \Magento\Wishlist\Model\ResourceModel\Item\Option\CollectionFactory $optionCollectionFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\ResourceModel\ConfigFactory $catalogConfFactory, \Magento\Catalog\Model\Entity\AttributeFactory $catalogAttrFactory, \Magento\Wishlist\Model\ResourceModel\Item $resource, \Magento\Framework\App\State $appState, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer = null, ?\Magento\Sales\Model\ConfigInterface $salesConfig = null, ?\Magento\Wishlist\Model\ResourceModel\Item\Product\CollectionBuilderInterface $productCollectionBuilder = null, ?\Magento\CatalogInventory\Model\ResourceModel\StockStatusFilterInterface $stockStatusFilter = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $stockConfiguration, $adminhtmlSales, $storeManager, $date, $wishlistConfig, $productVisibility, $coreResource, $optionCollectionFactory, $productCollectionFactory, $catalogConfFactory, $catalogAttrFactory, $resource, $appState, $connection, $tableMaintainer, $salesConfig, $productCollectionBuilder, $stockStatusFilter);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
