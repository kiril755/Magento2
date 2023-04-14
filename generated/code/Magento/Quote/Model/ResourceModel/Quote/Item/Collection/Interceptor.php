<?php
namespace Magento\Quote\Model\ResourceModel\Quote\Item\Collection;

/**
 * Interceptor class for @see \Magento\Quote\Model\ResourceModel\Quote\Item\Collection
 */
class Interceptor extends \Magento\Quote\Model\ResourceModel\Quote\Item\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Model\ResourceModel\Db\VersionControl\Snapshot $entitySnapshot, \Magento\Quote\Model\ResourceModel\Quote\Item\Option\CollectionFactory $itemOptionCollectionFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Quote\Model\Quote\Config $quoteConfig, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Quote\Model\Config $config = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $entitySnapshot, $itemOptionCollectionFactory, $productCollectionFactory, $quoteConfig, $connection, $resource, $storeManager, $config);
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
