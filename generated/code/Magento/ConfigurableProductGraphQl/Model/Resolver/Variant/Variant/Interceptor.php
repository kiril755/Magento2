<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Variant;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Variant
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Variant implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
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
