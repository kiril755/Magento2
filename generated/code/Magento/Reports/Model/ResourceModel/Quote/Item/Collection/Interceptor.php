<?php
namespace Magento\Reports\Model\ResourceModel\Quote\Item\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Quote\Item\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Quote\Item\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Catalog\Model\ResourceModel\Product\Collection $productResource, \Magento\Customer\Model\ResourceModel\Customer $customerResource, \Magento\Sales\Model\ResourceModel\Order\Collection $orderResource, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?\Magento\Reports\Model\Product\DataRetriever $productDataRetriever = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $productResource, $customerResource, $orderResource, $connection, $resource, $productDataRetriever);
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
