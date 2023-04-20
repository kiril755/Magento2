<?php
namespace Magento\CatalogInventory\Model\ResourceModel\StockStatusFilter;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\ResourceModel\StockStatusFilter
 */
class Interceptor extends \Magento\CatalogInventory\Model\ResourceModel\StockStatusFilter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration)
    {
        $this->___init();
        parent::__construct($resource, $stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\DB\Select $select, string $productTableAlias, string $stockStatusTableAlias = 'stock_status', ?int $websiteId = null) : \Magento\Framework\DB\Select
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($select, $productTableAlias, $stockStatusTableAlias, $websiteId);
    }
}
