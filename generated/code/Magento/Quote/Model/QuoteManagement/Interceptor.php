<?php
namespace Magento\Quote\Model\QuoteManagement;

/**
 * Interceptor class for @see \Magento\Quote\Model\QuoteManagement
 */
class Interceptor extends \Magento\Quote\Model\QuoteManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Quote\Model\SubmitQuoteValidator $submitQuoteValidator, \Magento\Sales\Api\Data\OrderInterfaceFactory $orderFactory, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Quote\Model\CustomerManagement $customerManagement, \Magento\Quote\Model\Quote\Address\ToOrder $quoteAddressToOrder, \Magento\Quote\Model\Quote\Address\ToOrderAddress $quoteAddressToOrderAddress, \Magento\Quote\Model\Quote\Item\ToOrderItem $quoteItemToOrderItem, \Magento\Quote\Model\Quote\Payment\ToOrderPayment $quotePaymentToOrderPayment, \Magento\Authorization\Model\UserContextInterface $userContext, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\CustomerFactory $customerModelFactory, \Magento\Quote\Model\Quote\AddressFactory $quoteAddressFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Quote\Model\QuoteFactory $quoteFactory, ?\Magento\Quote\Model\QuoteIdMaskFactory $quoteIdMaskFactory = null, ?\Magento\Customer\Api\AddressRepositoryInterface $addressRepository = null, ?\Magento\Framework\App\RequestInterface $request = null, ?\Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress = null, ?\Magento\Framework\Lock\LockManagerInterface $lockManager = null)
    {
        $this->___init();
        parent::__construct($eventManager, $submitQuoteValidator, $orderFactory, $orderManagement, $customerManagement, $quoteAddressToOrder, $quoteAddressToOrderAddress, $quoteItemToOrderItem, $quotePaymentToOrderPayment, $userContext, $quoteRepository, $customerRepository, $customerModelFactory, $quoteAddressFactory, $dataObjectHelper, $storeManager, $checkoutSession, $customerSession, $accountManagement, $quoteFactory, $quoteIdMaskFactory, $addressRepository, $request, $remoteAddress, $lockManager);
    }

    /**
     * {@inheritdoc}
     */
    public function placeOrder($cartId, ?\Magento\Quote\Api\Data\PaymentInterface $paymentMethod = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'placeOrder');
        return $pluginInfo ? $this->___callPlugins('placeOrder', func_get_args(), $pluginInfo) : parent::placeOrder($cartId, $paymentMethod);
    }

    /**
     * {@inheritdoc}
     */
    public function submit(\Magento\Quote\Model\Quote $quote, $orderData = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'submit');
        return $pluginInfo ? $this->___callPlugins('submit', func_get_args(), $pluginInfo) : parent::submit($quote, $orderData);
    }
}
