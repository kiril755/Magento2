<?php
namespace Magento\Checkout\Model\Type\Onepage;

/**
 * Interceptor class for @see \Magento\Checkout\Model\Type\Onepage
 */
class Interceptor extends \Magento\Checkout\Model\Type\Onepage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Checkout\Helper\Data $helper, \Magento\Customer\Model\Url $customerUrl, \Psr\Log\LoggerInterface $logger, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\RequestInterface $request, \Magento\Customer\Model\AddressFactory $customrAddrFactory, \Magento\Customer\Model\FormFactory $customerFormFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Framework\Math\Random $mathRandom, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector)
    {
        $this->___init();
        parent::__construct($eventManager, $helper, $customerUrl, $logger, $checkoutSession, $customerSession, $storeManager, $request, $customrAddrFactory, $customerFormFactory, $customerFactory, $orderFactory, $objectCopyService, $messageManager, $formFactory, $customerDataFactory, $mathRandom, $encryptor, $addressRepository, $accountManagement, $orderSender, $customerRepository, $quoteRepository, $extensibleDataObjectConverter, $quoteManagement, $dataObjectHelper, $totalsCollector);
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckout');
        return $pluginInfo ? $this->___callPlugins('getCheckout', func_get_args(), $pluginInfo) : parent::getCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        return $pluginInfo ? $this->___callPlugins('getQuote', func_get_args(), $pluginInfo) : parent::getQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuote(\Magento\Quote\Model\Quote $quote)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuote');
        return $pluginInfo ? $this->___callPlugins('setQuote', func_get_args(), $pluginInfo) : parent::setQuote($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerSession');
        return $pluginInfo ? $this->___callPlugins('getCustomerSession', func_get_args(), $pluginInfo) : parent::getCustomerSession();
    }

    /**
     * {@inheritdoc}
     */
    public function initCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initCheckout');
        return $pluginInfo ? $this->___callPlugins('initCheckout', func_get_args(), $pluginInfo) : parent::initCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCheckoutMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCheckoutMethod');
        return $pluginInfo ? $this->___callPlugins('getCheckoutMethod', func_get_args(), $pluginInfo) : parent::getCheckoutMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function saveCheckoutMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveCheckoutMethod');
        return $pluginInfo ? $this->___callPlugins('saveCheckoutMethod', func_get_args(), $pluginInfo) : parent::saveCheckoutMethod($method);
    }

    /**
     * {@inheritdoc}
     */
    public function saveShipping($data, $customerAddressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveShipping');
        return $pluginInfo ? $this->___callPlugins('saveShipping', func_get_args(), $pluginInfo) : parent::saveShipping($data, $customerAddressId);
    }

    /**
     * {@inheritdoc}
     */
    public function saveShippingMethod($shippingMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveShippingMethod');
        return $pluginInfo ? $this->___callPlugins('saveShippingMethod', func_get_args(), $pluginInfo) : parent::saveShippingMethod($shippingMethod);
    }

    /**
     * {@inheritdoc}
     */
    public function savePayment($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'savePayment');
        return $pluginInfo ? $this->___callPlugins('savePayment', func_get_args(), $pluginInfo) : parent::savePayment($data);
    }

    /**
     * {@inheritdoc}
     */
    public function saveOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveOrder');
        return $pluginInfo ? $this->___callPlugins('saveOrder', func_get_args(), $pluginInfo) : parent::saveOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastOrderId');
        return $pluginInfo ? $this->___callPlugins('getLastOrderId', func_get_args(), $pluginInfo) : parent::getLastOrderId();
    }
}
