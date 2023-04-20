<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\ConfigurableCartItemOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Product\Configuration $configurationHelper, \Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Framework\GraphQl\Query\Uid $uidEncoder)
    {
        $this->___init();
        parent::__construct($configurationHelper, $metadataPool, $uidEncoder);
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
