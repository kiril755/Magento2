<?php
namespace Magento\WeeeGraphQl\Model\Resolver\Quote\FixedProductTax;

/**
 * Interceptor class for @see \Magento\WeeeGraphQl\Model\Resolver\Quote\FixedProductTax
 */
class Interceptor extends \Magento\WeeeGraphQl\Model\Resolver\Quote\FixedProductTax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Weee\Helper\Data $weeeHelper, \Magento\Tax\Helper\Data $taxHelper)
    {
        $this->___init();
        parent::__construct($weeeHelper, $taxHelper);
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
