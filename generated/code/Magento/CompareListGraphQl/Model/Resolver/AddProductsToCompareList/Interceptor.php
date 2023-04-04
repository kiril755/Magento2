<?php
namespace Magento\CompareListGraphQl\Model\Resolver\AddProductsToCompareList;

/**
 * Interceptor class for @see \Magento\CompareListGraphQl\Model\Resolver\AddProductsToCompareList
 */
class Interceptor extends \Magento\CompareListGraphQl\Model\Resolver\AddProductsToCompareList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompareListGraphQl\Model\Service\AddToCompareList $addProductToCompareList, \Magento\CompareListGraphQl\Model\Service\GetCompareList $getCompareList, \Magento\Catalog\Model\MaskedListIdToCompareListId $maskedListIdToCompareListId, \Magento\CompareListGraphQl\Model\Service\Customer\GetListIdByCustomerId $getListIdByCustomerId)
    {
        $this->___init();
        parent::__construct($addProductToCompareList, $getCompareList, $maskedListIdToCompareListId, $getListIdByCustomerId);
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
