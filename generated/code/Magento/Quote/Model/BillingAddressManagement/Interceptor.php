<?php
namespace Magento\Quote\Model\BillingAddressManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\BillingAddressManagement
 */
class Interceptor extends \Magento\Quote\Model\BillingAddressManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Quote\Model\QuoteAddressValidator $addressValidator, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository)
    {
        $this->___init();
        parent::__construct($quoteRepository, $addressValidator, $logger, $addressRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function assign($cartId, \Magento\Quote\Api\Data\AddressInterface $address, $useForShipping = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assign');
        return $pluginInfo ? $this->___callPlugins('assign', func_get_args(), $pluginInfo) : parent::assign($cartId, $address, $useForShipping);
    }
}
