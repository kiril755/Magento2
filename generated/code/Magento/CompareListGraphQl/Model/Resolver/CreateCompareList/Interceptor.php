<?php
namespace Magento\CompareListGraphQl\Model\Resolver\CreateCompareList;

/**
 * Interceptor class for @see \Magento\CompareListGraphQl\Model\Resolver\CreateCompareList
 */
class Interceptor extends \Magento\CompareListGraphQl\Model\Resolver\CreateCompareList implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Math\Random $mathRandom, \Magento\CompareListGraphQl\Model\Service\Customer\GetListIdByCustomerId $getListIdByCustomerId, \Magento\CompareListGraphQl\Model\Service\AddToCompareList $addProductToCompareList, \Magento\CompareListGraphQl\Model\Service\GetCompareList $getCompareList, \Magento\CompareListGraphQl\Model\Service\CreateCompareList $createCompareList)
    {
        $this->___init();
        parent::__construct($mathRandom, $getListIdByCustomerId, $addProductToCompareList, $getCompareList, $createCompareList);
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
