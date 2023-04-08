<?php
namespace Magento\Store\Model\ResourceModel\Config\Collection\Scoped;

/**
 * Interceptor class for @see \Magento\Store\Model\ResourceModel\Config\Collection\Scoped
 */
class Interceptor extends \Magento\Store\Model\ResourceModel\Config\Collection\Scoped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Config\Model\ResourceModel\Config\Data $resource, $scope, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, $scopeId = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $resource, $scope, $connection, $scopeId);
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
