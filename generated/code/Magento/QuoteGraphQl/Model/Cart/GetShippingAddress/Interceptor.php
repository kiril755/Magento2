<?php
namespace Magento\QuoteGraphQl\Model\Cart\GetShippingAddress;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Cart\GetShippingAddress
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Cart\GetShippingAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\QuoteAddressFactory $quoteAddressFactory)
    {
        $this->___init();
        parent::__construct($quoteAddressFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\GraphQl\Model\Query\ContextInterface $context, array $shippingAddressInput) : \Magento\Quote\Model\Quote\Address
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($context, $shippingAddressInput);
    }
}
