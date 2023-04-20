<?php
namespace Magento\CompareListGraphQl\Model\Resolver\CompareList;

/**
 * Interceptor class for @see \Magento\CompareListGraphQl\Model\Resolver\CompareList
 */
class Interceptor extends \Magento\CompareListGraphQl\Model\Resolver\CompareList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CompareListGraphQl\Model\Service\GetCompareList $getCompareList, \Magento\Catalog\Model\MaskedListIdToCompareListId $maskedListIdToCompareListId)
    {
        $this->___init();
        parent::__construct($getCompareList, $maskedListIdToCompareListId);
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
