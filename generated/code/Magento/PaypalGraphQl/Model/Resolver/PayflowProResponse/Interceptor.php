<?php
namespace Magento\PaypalGraphQl\Model\Resolver\PayflowProResponse;

/**
 * Interceptor class for @see \Magento\PaypalGraphQl\Model\Resolver\PayflowProResponse
 */
class Interceptor extends \Magento\PaypalGraphQl\Model\Resolver\PayflowProResponse implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Paypal\Model\Payflow\Service\Response\Transaction $transaction, \Magento\Paypal\Model\Payflow\Service\Response\Validator\ResponseValidator $responseValidator, \Magento\Sales\Api\PaymentFailuresInterface $paymentFailures, \Magento\Framework\Serialize\Serializer\Json $json, \Magento\Paypal\Model\Payflow\Transparent $transparent, \Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Framework\Stdlib\Parameters $parameters, \Magento\Framework\DataObjectFactory $dataObjectFactory)
    {
        $this->___init();
        parent::__construct($transaction, $responseValidator, $paymentFailures, $json, $transparent, $getCartForUser, $parameters, $dataObjectFactory);
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
