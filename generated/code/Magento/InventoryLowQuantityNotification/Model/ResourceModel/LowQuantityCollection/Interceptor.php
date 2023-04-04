<?php
namespace Magento\InventoryLowQuantityNotification\Model\ResourceModel\LowQuantityCollection;

/**
 * Interceptor class for @see \Magento\InventoryLowQuantityNotification\Model\ResourceModel\LowQuantityCollection
 */
class Interceptor extends \Magento\InventoryLowQuantityNotification\Model\ResourceModel\LowQuantityCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Api\AttributeRepositoryInterface $attributeRepository, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\InventoryConfigurationApi\Model\GetAllowedProductTypesForSourceItemManagementInterface $getAllowedProductTypesForSourceItemManagement, \Magento\Framework\EntityManager\MetadataPool $metadataPool, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $attributeRepository, $stockConfiguration, $getAllowedProductTypesForSourceItemManagement, $metadataPool, $connection, $resource);
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
