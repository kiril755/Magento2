<?php
namespace Magento\GroupedProduct\Model\Inventory\ParentItemProcessor;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Model\Inventory\ParentItemProcessor
 */
class Interceptor extends \Magento\GroupedProduct\Model\Inventory\ParentItemProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GroupedProduct\Model\Inventory\ChangeParentStockStatus $changeParentStockStatus)
    {
        $this->___init();
        parent::__construct($changeParentStockStatus);
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
