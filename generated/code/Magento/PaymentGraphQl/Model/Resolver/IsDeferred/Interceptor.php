<?php
namespace Magento\PaymentGraphQl\Model\Resolver\IsDeferred;

/**
 * Interceptor class for @see \Magento\PaymentGraphQl\Model\Resolver\IsDeferred
 */
class Interceptor extends \Magento\PaymentGraphQl\Model\Resolver\IsDeferred implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Payment\Helper\Data $paymentData, array $overrides = [])
    {
        $this->___init();
        parent::__construct($paymentData, $overrides);
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
