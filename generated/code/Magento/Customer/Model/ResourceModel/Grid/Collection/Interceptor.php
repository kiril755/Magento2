<?php
namespace Magento\Customer\Model\ResourceModel\Grid\Collection;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Grid\Collection
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Locale\ResolverInterface $localeResolver, $mainTable = 'customer_grid_flat', $resourceModel = 'Magento\\Customer\\Model\\ResourceModel\\Customer', ?\Magento\Framework\Stdlib\DateTime\TimezoneInterface $timeZone = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $localeResolver, $mainTable, $resourceModel, $timeZone);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($field, $condition);
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
