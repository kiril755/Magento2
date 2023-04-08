<?php
namespace Magento\ConfigurableProductGraphQl\Model\Resolver\OptionsSelectionMetadata;

/**
 * Interceptor class for @see \Magento\ConfigurableProductGraphQl\Model\Resolver\OptionsSelectionMetadata
 */
class Interceptor extends \Magento\ConfigurableProductGraphQl\Model\Resolver\OptionsSelectionMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ConfigurableProductGraphQl\Model\Options\Metadata $configurableSelectionMetadata, \Magento\ConfigurableProductGraphQl\Model\Options\ConfigurableOptionsMetadata $configurableOptionsMetadata, \Magento\ConfigurableProductGraphQl\Model\Options\SelectionUidFormatter $selectionUidFormatter, \Magento\ConfigurableProductGraphQl\Model\Options\DataProvider\Variant $variant, \Magento\ConfigurableProductGraphQl\Model\Formatter\Variant $variantFormatter, \Magento\ConfigurableProduct\Helper\Data $configurableProductHelper)
    {
        $this->___init();
        parent::__construct($configurableSelectionMetadata, $configurableOptionsMetadata, $selectionUidFormatter, $variant, $variantFormatter, $configurableProductHelper);
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
