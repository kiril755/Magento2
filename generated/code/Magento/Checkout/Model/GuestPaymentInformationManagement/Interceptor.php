<?php
namespace Magento\Checkout\Model\GuestPaymentInformationManagement;

/**
 * Interceptor class for @see \Magento\Checkout\Model\GuestPaymentInformationManagement
 */
class Interceptor extends \Magento\Checkout\Model\GuestPaymentInformationManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Api\GuestBillingAddressManagementInterface $billingAddressManagement, \Magento\Quote\Api\GuestPaymentMethodManagementInterface $paymentMethodManagement, \Magento\Quote\Api\GuestCartManagementInterface $cartManagement, \Magento\Checkout\Api\PaymentInformationManagementInterface $paymentInformationManagement, \Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Psr\Log\LoggerInterface $logger, ?\Magento\Checkout\Api\PaymentProcessingRateLimiterInterface $paymentsRateLimiter = null, ?\Magento\Checkout\Api\PaymentSavingRateLimiterInterface $savingRateLimiter = null, ?\Magento\Checkout\Model\AddressComparatorInterface $addressComparator = null)
    {
        $this->___init();
        parent::__construct($billingAddressManagement, $paymentMethodManagement, $cartManagement, $paymentInformationManagement, $quoteIdMaskFactory, $cartRepository, $logger, $paymentsRateLimiter, $savingRateLimiter, $addressComparator);
    }

    /**
     * {@inheritdoc}
     */
    public function savePaymentInformationAndPlaceOrder($cartId, $email, \Magento\Quote\Api\Data\PaymentInterface $paymentMethod, ?\Magento\Quote\Api\Data\AddressInterface $billingAddress = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePaymentInformationAndPlaceOrder');
        return $pluginInfo ? $this->___callPlugins('savePaymentInformationAndPlaceOrder', func_get_args(), $pluginInfo) : parent::savePaymentInformationAndPlaceOrder($cartId, $email, $paymentMethod, $billingAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function savePaymentInformation($cartId, $email, \Magento\Quote\Api\Data\PaymentInterface $paymentMethod, ?\Magento\Quote\Api\Data\AddressInterface $billingAddress = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePaymentInformation');
        return $pluginInfo ? $this->___callPlugins('savePaymentInformation', func_get_args(), $pluginInfo) : parent::savePaymentInformation($cartId, $email, $paymentMethod, $billingAddress);
    }
}
