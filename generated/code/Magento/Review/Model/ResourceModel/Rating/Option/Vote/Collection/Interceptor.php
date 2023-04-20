<?php
namespace Magento\Review\Model\ResourceModel\Rating\Option\Vote\Collection;

/**
 * Interceptor class for @see \Magento\Review\Model\ResourceModel\Rating\Option\Vote\Collection
 */
class Interceptor extends \Magento\Review\Model\ResourceModel\Rating\Option\Vote\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Review\Model\ResourceModel\Rating\Option\CollectionFactory $ratingCollectionF, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeManager, $ratingCollectionF, $connection, $resource);
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
