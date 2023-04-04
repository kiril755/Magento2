<?php
namespace Magento\CatalogGraphQl\Model\Resolver\CategoriesQuery;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\CategoriesQuery
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\CategoriesQuery implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree $categoryTree, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ExtractDataFromCategoryTree $extractDataFromCategoryTree, \Magento\CatalogGraphQl\Model\Category\CategoryFilter $categoryFilter, \Magento\Framework\GraphQl\Query\Resolver\ArgumentsProcessorInterface $argsSelection, \Magento\Framework\Api\Search\SearchCriteriaFactory $searchCriteriaFactory)
    {
        $this->___init();
        parent::__construct($categoryTree, $extractDataFromCategoryTree, $categoryFilter, $argsSelection, $searchCriteriaFactory);
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
