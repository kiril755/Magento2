<?php
namespace Magento\Cms\Model\ResourceModel\Page\Grid\Collection;

/**
 * Interceptor class for @see \Magento\Cms\Model\ResourceModel\Page\Grid\Collection
 */
class Interceptor extends \Magento\Cms\Model\ResourceModel\Page\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $mainTable, $eventPrefix, $eventObject, $resourceModel, $model = 'Magento\\Framework\\View\\Element\\UiComponent\\DataProvider\\Document', $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?\Magento\Framework\Stdlib\DateTime\TimezoneInterface $timeZone = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeManager, $metadataPool, $mainTable, $eventPrefix, $eventObject, $resourceModel, $model, $connection, $resource, $timeZone);
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
