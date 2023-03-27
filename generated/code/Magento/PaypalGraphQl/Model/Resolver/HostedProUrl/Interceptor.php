<?php
namespace Magento\PaypalGraphQl\Model\Resolver\HostedProUrl;

/**
 * Interceptor class for @see \Magento\PaypalGraphQl\Model\Resolver\HostedProUrl
 */
class Interceptor extends \Magento\PaypalGraphQl\Model\Resolver\HostedProUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId, \Magento\Sales\Model\ResourceModel\Order\CollectionFactoryInterface $orderCollectionFactory)
    {
        $this->___init();
        parent::__construct($maskedQuoteIdToQuoteId, $orderCollectionFactory);
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
