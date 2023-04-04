<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\ProductResolver;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\ProductResolver
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\ProductResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Configuration\Item\ItemResolverInterface $configurableItemResolver)
    {
        $this->___init();
        parent::__construct($configurableItemResolver);
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
