<?php
namespace Magento\Quote\Model\Quote;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote
 */
class Interceptor extends \Magento\Quote\Model\Quote implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Quote\Model\QuoteValidator $quoteValidator, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Quote\Model\Quote\AddressFactory $quoteAddressFactory, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Quote\Model\ResourceModel\Quote\Item\CollectionFactory $quoteItemCollectionFactory, \Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Magento\Framework\Message\Factory $messageFactory, \Magento\Sales\Model\Status\ListFactory $statusListFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Quote\Model\Quote\PaymentFactory $quotePaymentFactory, \Magento\Quote\Model\ResourceModel\Quote\Payment\CollectionFactory $quotePaymentCollectionFactory, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Quote\Model\Quote\Item\Processor $itemProcessor, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\Api\ExtensibleDataObjectConverter $extensibleDataObjectConverter, \Magento\Quote\Model\Cart\CurrencyFactory $currencyFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, \Magento\Quote\Model\Quote\TotalsReader $totalsReader, \Magento\Quote\Model\ShippingFactory $shippingFactory, \Magento\Quote\Model\ShippingAssignmentFactory $shippingAssignmentFactory, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Sales\Model\OrderIncrementIdChecker $orderIncrementIdChecker = null, ?\Magento\Directory\Model\AllowedCountries $allowedCountriesReader = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $quoteValidator, $catalogProduct, $scopeConfig, $storeManager, $config, $quoteAddressFactory, $customerFactory, $groupRepository, $quoteItemCollectionFactory, $quoteItemFactory, $messageFactory, $statusListFactory, $productRepository, $quotePaymentFactory, $quotePaymentCollectionFactory, $objectCopyService, $stockRegistry, $itemProcessor, $objectFactory, $addressRepository, $criteriaBuilder, $filterBuilder, $addressDataFactory, $customerDataFactory, $customerRepository, $dataObjectHelper, $extensibleDataObjectConverter, $currencyFactory, $extensionAttributesJoinProcessor, $totalsCollector, $totalsReader, $shippingFactory, $shippingAssignmentFactory, $resource, $resourceCollection, $data, $orderIncrementIdChecker, $allowedCountriesReader);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByCustomer($customer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByCustomer');
        return $pluginInfo ? $this->___callPlugins('loadByCustomer', func_get_args(), $pluginInfo) : parent::loadByCustomer($customer);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByIdWithoutStore($quoteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByIdWithoutStore');
        return $pluginInfo ? $this->___callPlugins('loadByIdWithoutStore', func_get_args(), $pluginInfo) : parent::loadByIdWithoutStore($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItem');
        return $pluginInfo ? $this->___callPlugins('removeItem', func_get_args(), $pluginInfo) : parent::removeItem($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function updateItem($itemId, $buyRequest, $params = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateItem');
        return $pluginInfo ? $this->___callPlugins('updateItem', func_get_args(), $pluginInfo) : parent::updateItem($itemId, $buyRequest, $params);
    }
}
