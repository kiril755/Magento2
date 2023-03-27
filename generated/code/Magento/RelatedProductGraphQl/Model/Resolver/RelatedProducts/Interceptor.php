<?php
namespace Magento\RelatedProductGraphQl\Model\Resolver\RelatedProducts;

/**
 * Interceptor class for @see \Magento\RelatedProductGraphQl\Model\Resolver\RelatedProducts
 */
class Interceptor extends \Magento\RelatedProductGraphQl\Model\Resolver\RelatedProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Product\ProductFieldsSelector $productFieldsSelector, \Magento\RelatedProductGraphQl\Model\DataProvider\RelatedProductDataProvider $relatedProductDataProvider)
    {
        $this->___init();
        parent::__construct($productFieldsSelector, $relatedProductDataProvider);
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
