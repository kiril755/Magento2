<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Attributes\ConfigurableAttributeUid;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Attributes\ConfigurableAttributeUid
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\Variant\Attributes\ConfigurableAttributeUid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Uid $uidEncoder)
    {
        $this->___init();
        parent::__construct($uidEncoder);
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
