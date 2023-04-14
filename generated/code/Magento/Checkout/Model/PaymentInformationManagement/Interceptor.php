<?php
namespace Magento\Checkout\Model\PaymentInformationManagement;

/**
 * Interceptor class for @see \Magento\Checkout\Model\PaymentInformationManagement
 */
class Interceptor extends \Magento\Checkout\Model\PaymentInformationManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\BillingAddressManagementInterface $billingAddressManagement, \Magento\Quote\Api\PaymentMethodManagementInterface $paymentMethodManagement, \Magento\Quote\Api\CartManagementInterface $cartManagement, \Magento\Checkout\Model\PaymentDetailsFactory $paymentDetailsFactory, \Magento\Quote\Api\CartTotalRepositoryInterface $cartTotalsRepository, ?\Magento\Checkout\Api\PaymentProcessingRateLimiterInterface $paymentRateLimiter = null, ?\Magento\Checkout\Api\PaymentSavingRateLimiterInterface $saveRateLimiter = null, ?\Magento\Quote\Api\CartRepositoryInterface $cartRepository = null, ?\Magento\Customer\Api\AddressRepositoryInterface $addressRepository = null, ?\Magento\Checkout\Model\AddressComparatorInterface $addressComparator = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($billingAddressManagement, $paymentMethodManagement, $cartManagement, $paymentDetailsFactory, $cartTotalsRepository, $paymentRateLimiter, $saveRateLimiter, $cartRepository, $addressRepository, $addressComparator, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function savePaymentInformationAndPlaceOrder($cartId, \Magento\Quote\Api\Data\PaymentInterface $paymentMethod, ?\Magento\Quote\Api\Data\AddressInterface $billingAddress = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePaymentInformationAndPlaceOrder');
        return $pluginInfo ? $this->___callPlugins('savePaymentInformationAndPlaceOrder', func_get_args(), $pluginInfo) : parent::savePaymentInformationAndPlaceOrder($cartId, $paymentMethod, $billingAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function savePaymentInformation($cartId, \Magento\Quote\Api\Data\PaymentInterface $paymentMethod, ?\Magento\Quote\Api\Data\AddressInterface $billingAddress = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePaymentInformation');
        return $pluginInfo ? $this->___callPlugins('savePaymentInformation', func_get_args(), $pluginInfo) : parent::savePaymentInformation($cartId, $paymentMethod, $billingAddress);
    }
}
