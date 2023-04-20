<?php
namespace Magento\Multishipping\Model\Checkout\Type\Multishipping;

/**
 * Interceptor class for @see \Magento\Multishipping\Model\Checkout\Type\Multishipping
 */
class Interceptor extends \Magento\Multishipping\Model\Checkout\Type\Multishipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Session\Generic $session, \Magento\Quote\Model\Quote\AddressFactory $addressFactory, \Magento\Quote\Model\Quote\Address\ToOrder $quoteAddressToOrder, \Magento\Quote\Model\Quote\Address\ToOrderAddress $quoteAddressToOrderAddress, \Magento\Quote\Model\Quote\Payment\ToOrderPayment $quotePaymentToOrderPayment, \Magento\Quote\Model\Quote\Item\ToOrderItem $quoteItemToOrderItem, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Payment\Model\Method\SpecificationInterface $paymentSpecification, \Magento\Multishipping\Helper\Data $helper, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, array $data = [], ?\Magento\Quote\Api\Data\CartExtensionFactory $cartExtensionFactory = null, ?\Magento\Directory\Model\AllowedCountries $allowedCountryReader = null, ?\Magento\Multishipping\Model\Checkout\Type\Multishipping\PlaceOrderFactory $placeOrderFactory = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\Api\DataObjectHelper $dataObjectHelper = null)
    {
        $this->___init();
        parent::__construct($checkoutSession, $customerSession, $orderFactory, $addressRepository, $eventManager, $scopeConfig, $session, $addressFactory, $quoteAddressToOrder, $quoteAddressToOrderAddress, $quotePaymentToOrderPayment, $quoteItemToOrderItem, $storeManager, $paymentSpecification, $helper, $orderSender, $priceCurrency, $quoteRepository, $searchCriteriaBuilder, $filterBuilder, $totalsCollector, $data, $cartExtensionFactory, $allowedCountryReader, $placeOrderFactory, $logger, $dataObjectHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingMethods($methods)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingMethods');
        return $pluginInfo ? $this->___callPlugins('setShippingMethods', func_get_args(), $pluginInfo) : parent::setShippingMethods($methods);
    }
}
