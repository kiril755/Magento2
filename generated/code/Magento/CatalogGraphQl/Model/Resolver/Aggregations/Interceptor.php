<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Aggregations;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Aggregations
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Aggregations implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Layer\DataProvider\Filters $filtersDataProvider, \Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\LayerBuilder $layerBuilder, ?\Magento\Directory\Model\PriceCurrency $priceCurrency = null, ?\Magento\CatalogGraphQl\DataProvider\Product\LayeredNavigation\Builder\Aggregations\Category\IncludeDirectChildrenOnly $includeDirectChildrenOnly = null)
    {
        $this->___init();
        parent::__construct($filtersDataProvider, $layerBuilder, $priceCurrency, $includeDirectChildrenOnly);
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
