<?php
namespace Magento\BundleGraphQl\Model\Resolver\BundleItems;

/**
 * Interceptor class for @see \Magento\BundleGraphQl\Model\Resolver\BundleItems
 */
class Interceptor extends \Magento\BundleGraphQl\Model\Resolver\BundleItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\BundleGraphQl\Model\Resolver\Options\Collection $bundleOptionCollection, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($bundleOptionCollection, $valueFactory, $metadataPool);
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
