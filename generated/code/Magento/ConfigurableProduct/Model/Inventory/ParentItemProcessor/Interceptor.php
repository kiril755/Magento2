<?php
namespace Magento\ConfigurableProduct\Model\Inventory\ParentItemProcessor;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\Inventory\ParentItemProcessor
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\Inventory\ParentItemProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurableType, \Magento\CatalogInventory\Api\StockItemCriteriaInterfaceFactory $criteriaInterfaceFactory, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $stockItemRepository, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, ?\Magento\ConfigurableProduct\Model\Inventory\ChangeParentStockStatus $changeParentStockStatus = null)
    {
        $this->___init();
        parent::__construct($configurableType, $criteriaInterfaceFactory, $stockItemRepository, $stockConfiguration, $changeParentStockStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function process(\Magento\Catalog\Api\Data\ProductInterface $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($product);
    }
}
