<?php
namespace Magento\BundleGraphQl\Model\Resolver\Order\Item\BundleOptions;

/**
 * Interceptor class for @see \Magento\BundleGraphQl\Model\Resolver\Order\Item\BundleOptions
 */
class Interceptor extends \Magento\BundleGraphQl\Model\Resolver\Order\Item\BundleOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Framework\GraphQl\Query\Uid $uidEncoder)
    {
        $this->___init();
        parent::__construct($valueFactory, $serializer, $uidEncoder);
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
