<?php
namespace Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $catalogProductTypeConfigurable, \Magento\Catalog\Helper\Data $catalogData, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute $resource, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable $configurableResource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $storeManager, $catalogProductTypeConfigurable, $catalogData, $resource, $connection, $configurableResource);
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
