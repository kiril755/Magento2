<?php
namespace Magento\QuoteGraphQl\Model\Resolver\CreateEmptyCart;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\CreateEmptyCart
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\CreateEmptyCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForCustomer $createEmptyCartForCustomer, \Magento\QuoteGraphQl\Model\Cart\CreateEmptyCartForGuest $createEmptyCartForGuest, \Magento\Quote\Model\MaskedQuoteIdToQuoteIdInterface $maskedQuoteIdToQuoteId)
    {
        $this->___init();
        parent::__construct($createEmptyCartForCustomer, $createEmptyCartForGuest, $maskedQuoteIdToQuoteId);
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
