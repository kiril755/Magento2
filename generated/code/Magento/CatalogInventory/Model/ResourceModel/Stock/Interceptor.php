<?php
namespace Magento\CatalogInventory\Model\ResourceModel\Stock;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\ResourceModel\Stock
 */
class Interceptor extends \Magento\CatalogInventory\Model\ResourceModel\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Store\Model\StoreManagerInterface $storeManager, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $scopeConfig, $dateTime, $stockConfiguration, $storeManager, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function correctItemsQty(array $items, $websiteId, $operator)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'correctItemsQty');
        return $pluginInfo ? $this->___callPlugins('correctItemsQty', func_get_args(), $pluginInfo) : parent::correctItemsQty($items, $websiteId, $operator);
    }
}
