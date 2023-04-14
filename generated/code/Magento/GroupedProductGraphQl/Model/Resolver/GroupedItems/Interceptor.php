<?php
namespace Magento\GroupedProductGraphQl\Model\Resolver\GroupedItems;

/**
 * Interceptor class for @see \Magento\GroupedProductGraphQl\Model\Resolver\GroupedItems
 */
class Interceptor extends \Magento\GroupedProductGraphQl\Model\Resolver\GroupedItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Deferred\Product $productResolver)
    {
        $this->___init();
        parent::__construct($productResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
