<?php
namespace Magento\CatalogInventory\Model\ResourceModel\Stock\Item;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\ResourceModel\Stock\Item
 */
class Interceptor extends \Magento\CatalogInventory\Model\ResourceModel\Stock\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\CatalogInventory\Model\Indexer\Stock\Processor $processor, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Catalog\Model\Indexer\Product\Price\Processor $priceIndexProcessor, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $processor, $stockConfiguration, $dateTime, $priceIndexProcessor, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }
}
