<?php
namespace Magento\QuoteGraphQl\Model\Resolver\PlaceOrder;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\PlaceOrder
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\PlaceOrder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForCheckout $getCartForCheckout, \Magento\QuoteGraphQl\Model\Cart\PlaceOrder $placeOrder, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\GraphQl\Helper\Error\AggregateExceptionMessageFormatter $errorMessageFormatter, ?\Magento\QuoteGraphQl\Model\Cart\PlaceOrderMutexInterface $placeOrderMutex = null)
    {
        $this->___init();
        parent::__construct($getCartForCheckout, $placeOrder, $orderRepository, $errorMessageFormatter, $placeOrderMutex);
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
