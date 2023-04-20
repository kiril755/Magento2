<?php
namespace Magento\BundleGraphQl\Model\Resolver\Options\Label;

/**
 * Interceptor class for @see \Magento\BundleGraphQl\Model\Resolver\Options\Label
 */
class Interceptor extends \Magento\BundleGraphQl\Model\Resolver\Options\Label implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Deferred\Product $product)
    {
        $this->___init();
        parent::__construct($valueFactory, $product);
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
