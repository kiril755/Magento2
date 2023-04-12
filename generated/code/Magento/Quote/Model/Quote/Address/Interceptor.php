<?php
namespace Magento\Quote\Model\Quote\Address;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Address
 */
class Interceptor extends \Magento\Quote\Model\Quote\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Directory\Helper\Data $directoryData, \Magento\Eav\Model\Config $eavConfig, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\Directory\Model\CountryFactory $countryFactory, \Magento\Customer\Api\AddressMetadataInterface $metadataService, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Magento\Customer\Api\Data\RegionInterfaceFactory $regionDataFactory, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Quote\Model\Quote\Address\ItemFactory $addressItemFactory, \Magento\Quote\Model\ResourceModel\Quote\Address\Item\CollectionFactory $itemCollectionFactory, \Magento\Quote\Model\Quote\Address\RateFactory $addressRateFactory, \Magento\Quote\Model\Quote\Address\RateCollectorInterfaceFactory $rateCollector, \Magento\Quote\Model\ResourceModel\Quote\Address\Rate\CollectionFactory $rateCollectionFactory, \Magento\Quote\Model\Quote\Address\RateRequestFactory $rateRequestFactory, \Magento\Quote\Model\Quote\Address\Total\CollectorFactory $totalCollectorFactory, \Magento\Quote\Model\Quote\Address\TotalFactory $addressTotalFactory, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Shipping\Model\CarrierFactoryInterface $carrierFactory, \Magento\Quote\Model\Quote\Address\Validator $validator, \Magento\Customer\Model\Address\Mapper $addressMapper, \Magento\Quote\Model\Quote\Address\CustomAttributeListInterface $attributeList, \Magento\Quote\Model\Quote\TotalsCollector $totalsCollector, \Magento\Quote\Model\Quote\TotalsReader $totalsReader, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $directoryData, $eavConfig, $addressConfig, $regionFactory, $countryFactory, $metadataService, $addressDataFactory, $regionDataFactory, $dataObjectHelper, $scopeConfig, $addressItemFactory, $itemCollectionFactory, $addressRateFactory, $rateCollector, $rateCollectionFactory, $rateRequestFactory, $totalCollectorFactory, $addressTotalFactory, $objectCopyService, $carrierFactory, $validator, $addressMapper, $attributeList, $totalsCollector, $totalsReader, $resource, $resourceCollection, $data, $serializer, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
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
    public function getQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuote');
        return $pluginInfo ? $this->___callPlugins('getQuote', func_get_args(), $pluginInfo) : parent::getQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function importCustomerAddressData(\Magento\Customer\Api\Data\AddressInterface $address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importCustomerAddressData');
        return $pluginInfo ? $this->___callPlugins('importCustomerAddressData', func_get_args(), $pluginInfo) : parent::importCustomerAddressData($address);
    }

    /**
     * {@inheritdoc}
     */
    public function exportCustomerAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'exportCustomerAddress');
        return $pluginInfo ? $this->___callPlugins('exportCustomerAddress', func_get_args(), $pluginInfo) : parent::exportCustomerAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($arrAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemsCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemsCollection');
        return $pluginInfo ? $this->___callPlugins('getItemsCollection', func_get_args(), $pluginInfo) : parent::getItemsCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllItems');
        return $pluginInfo ? $this->___callPlugins('getAllItems', func_get_args(), $pluginInfo) : parent::getAllItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllVisibleItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllVisibleItems');
        return $pluginInfo ? $this->___callPlugins('getAllVisibleItems', func_get_args(), $pluginInfo) : parent::getAllVisibleItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemQty($itemId = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemQty');
        return $pluginInfo ? $this->___callPlugins('getItemQty', func_get_args(), $pluginInfo) : parent::getItemQty($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasItems');
        return $pluginInfo ? $this->___callPlugins('hasItems', func_get_args(), $pluginInfo) : parent::hasItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemById($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        return $pluginInfo ? $this->___callPlugins('getItemById', func_get_args(), $pluginInfo) : parent::getItemById($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function getValidItemById($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidItemById');
        return $pluginInfo ? $this->___callPlugins('getValidItemById', func_get_args(), $pluginInfo) : parent::getValidItemById($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemByQuoteItemId($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemByQuoteItemId');
        return $pluginInfo ? $this->___callPlugins('getItemByQuoteItemId', func_get_args(), $pluginInfo) : parent::getItemByQuoteItemId($itemId);
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
    public function addItem(\Magento\Quote\Model\Quote\Item\AbstractItem $item, $qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        return $pluginInfo ? $this->___callPlugins('addItem', func_get_args(), $pluginInfo) : parent::addItem($item, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingRatesCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingRatesCollection');
        return $pluginInfo ? $this->___callPlugins('getShippingRatesCollection', func_get_args(), $pluginInfo) : parent::getShippingRatesCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllShippingRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllShippingRates');
        return $pluginInfo ? $this->___callPlugins('getAllShippingRates', func_get_args(), $pluginInfo) : parent::getAllShippingRates();
    }

    /**
     * {@inheritdoc}
     */
    public function getGroupedAllShippingRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGroupedAllShippingRates');
        return $pluginInfo ? $this->___callPlugins('getGroupedAllShippingRates', func_get_args(), $pluginInfo) : parent::getGroupedAllShippingRates();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingRateById($rateId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingRateById');
        return $pluginInfo ? $this->___callPlugins('getShippingRateById', func_get_args(), $pluginInfo) : parent::getShippingRateById($rateId);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingRateByCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingRateByCode');
        return $pluginInfo ? $this->___callPlugins('getShippingRateByCode', func_get_args(), $pluginInfo) : parent::getShippingRateByCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function removeAllShippingRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeAllShippingRates');
        return $pluginInfo ? $this->___callPlugins('removeAllShippingRates', func_get_args(), $pluginInfo) : parent::removeAllShippingRates();
    }

    /**
     * {@inheritdoc}
     */
    public function addShippingRate(\Magento\Quote\Model\Quote\Address\Rate $rate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addShippingRate');
        return $pluginInfo ? $this->___callPlugins('addShippingRate', func_get_args(), $pluginInfo) : parent::addShippingRate($rate);
    }

    /**
     * {@inheritdoc}
     */
    public function collectShippingRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectShippingRates');
        return $pluginInfo ? $this->___callPlugins('collectShippingRates', func_get_args(), $pluginInfo) : parent::collectShippingRates();
    }

    /**
     * {@inheritdoc}
     */
    public function requestShippingRates(?\Magento\Quote\Model\Quote\Item\AbstractItem $item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'requestShippingRates');
        return $pluginInfo ? $this->___callPlugins('requestShippingRates', func_get_args(), $pluginInfo) : parent::requestShippingRates($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotals');
        return $pluginInfo ? $this->___callPlugins('getTotals', func_get_args(), $pluginInfo) : parent::getTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function addTotal($total)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTotal');
        return $pluginInfo ? $this->___callPlugins('addTotal', func_get_args(), $pluginInfo) : parent::addTotal($total);
    }

    /**
     * {@inheritdoc}
     */
    public function itemsCollectionWasSet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'itemsCollectionWasSet');
        return $pluginInfo ? $this->___callPlugins('itemsCollectionWasSet', func_get_args(), $pluginInfo) : parent::itemsCollectionWasSet();
    }

    /**
     * {@inheritdoc}
     */
    public function shippingRatesCollectionWasSet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'shippingRatesCollectionWasSet');
        return $pluginInfo ? $this->___callPlugins('shippingRatesCollectionWasSet', func_get_args(), $pluginInfo) : parent::shippingRatesCollectionWasSet();
    }

    /**
     * {@inheritdoc}
     */
    public function validateMinimumAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateMinimumAmount');
        return $pluginInfo ? $this->___callPlugins('validateMinimumAmount', func_get_args(), $pluginInfo) : parent::validateMinimumAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getAppliedTaxes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAppliedTaxes');
        return $pluginInfo ? $this->___callPlugins('getAppliedTaxes', func_get_args(), $pluginInfo) : parent::getAppliedTaxes();
    }

    /**
     * {@inheritdoc}
     */
    public function setAppliedTaxes($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAppliedTaxes');
        return $pluginInfo ? $this->___callPlugins('setAppliedTaxes', func_get_args(), $pluginInfo) : parent::setAppliedTaxes($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAmount($value, $alreadyExclTax = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAmount');
        return $pluginInfo ? $this->___callPlugins('setShippingAmount', func_get_args(), $pluginInfo) : parent::setShippingAmount($value, $alreadyExclTax);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingAmount($value, $alreadyExclTax = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingAmount', func_get_args(), $pluginInfo) : parent::setBaseShippingAmount($value, $alreadyExclTax);
    }

    /**
     * {@inheritdoc}
     */
    public function setTotalAmount($code, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTotalAmount');
        return $pluginInfo ? $this->___callPlugins('setTotalAmount', func_get_args(), $pluginInfo) : parent::setTotalAmount($code, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTotalAmount($code, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTotalAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseTotalAmount', func_get_args(), $pluginInfo) : parent::setBaseTotalAmount($code, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function addTotalAmount($code, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTotalAmount');
        return $pluginInfo ? $this->___callPlugins('addTotalAmount', func_get_args(), $pluginInfo) : parent::addTotalAmount($code, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function addBaseTotalAmount($code, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addBaseTotalAmount');
        return $pluginInfo ? $this->___callPlugins('addBaseTotalAmount', func_get_args(), $pluginInfo) : parent::addBaseTotalAmount($code, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalAmount($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalAmount');
        return $pluginInfo ? $this->___callPlugins('getTotalAmount', func_get_args(), $pluginInfo) : parent::getTotalAmount($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTotalAmount($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTotalAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseTotalAmount', func_get_args(), $pluginInfo) : parent::getBaseTotalAmount($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseSubtotalWithDiscount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseSubtotalWithDiscount');
        return $pluginInfo ? $this->___callPlugins('getBaseSubtotalWithDiscount', func_get_args(), $pluginInfo) : parent::getBaseSubtotalWithDiscount();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubtotalWithDiscount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubtotalWithDiscount');
        return $pluginInfo ? $this->___callPlugins('getSubtotalWithDiscount', func_get_args(), $pluginInfo) : parent::getSubtotalWithDiscount();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllTotalAmounts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllTotalAmounts');
        return $pluginInfo ? $this->___callPlugins('getAllTotalAmounts', func_get_args(), $pluginInfo) : parent::getAllTotalAmounts();
    }

    /**
     * {@inheritdoc}
     */
    public function getAllBaseTotalAmounts()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllBaseTotalAmounts');
        return $pluginInfo ? $this->___callPlugins('getAllBaseTotalAmounts', func_get_args(), $pluginInfo) : parent::getAllBaseTotalAmounts();
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountryId');
        return $pluginInfo ? $this->___callPlugins('getCountryId', func_get_args(), $pluginInfo) : parent::getCountryId();
    }

    /**
     * {@inheritdoc}
     */
    public function setCountryId($countryId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCountryId');
        return $pluginInfo ? $this->___callPlugins('setCountryId', func_get_args(), $pluginInfo) : parent::setCountryId($countryId);
    }

    /**
     * {@inheritdoc}
     */
    public function getStreet()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStreet');
        return $pluginInfo ? $this->___callPlugins('getStreet', func_get_args(), $pluginInfo) : parent::getStreet();
    }

    /**
     * {@inheritdoc}
     */
    public function setStreet($street)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStreet');
        return $pluginInfo ? $this->___callPlugins('setStreet', func_get_args(), $pluginInfo) : parent::setStreet($street);
    }

    /**
     * {@inheritdoc}
     */
    public function getCompany()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCompany');
        return $pluginInfo ? $this->___callPlugins('getCompany', func_get_args(), $pluginInfo) : parent::getCompany();
    }

    /**
     * {@inheritdoc}
     */
    public function setCompany($company)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCompany');
        return $pluginInfo ? $this->___callPlugins('setCompany', func_get_args(), $pluginInfo) : parent::setCompany($company);
    }

    /**
     * {@inheritdoc}
     */
    public function getTelephone()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTelephone');
        return $pluginInfo ? $this->___callPlugins('getTelephone', func_get_args(), $pluginInfo) : parent::getTelephone();
    }

    /**
     * {@inheritdoc}
     */
    public function setTelephone($telephone)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTelephone');
        return $pluginInfo ? $this->___callPlugins('setTelephone', func_get_args(), $pluginInfo) : parent::setTelephone($telephone);
    }

    /**
     * {@inheritdoc}
     */
    public function getFax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFax');
        return $pluginInfo ? $this->___callPlugins('getFax', func_get_args(), $pluginInfo) : parent::getFax();
    }

    /**
     * {@inheritdoc}
     */
    public function setFax($fax)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFax');
        return $pluginInfo ? $this->___callPlugins('setFax', func_get_args(), $pluginInfo) : parent::setFax($fax);
    }

    /**
     * {@inheritdoc}
     */
    public function getPostcode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPostcode');
        return $pluginInfo ? $this->___callPlugins('getPostcode', func_get_args(), $pluginInfo) : parent::getPostcode();
    }

    /**
     * {@inheritdoc}
     */
    public function setPostcode($postcode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPostcode');
        return $pluginInfo ? $this->___callPlugins('setPostcode', func_get_args(), $pluginInfo) : parent::setPostcode($postcode);
    }

    /**
     * {@inheritdoc}
     */
    public function getCity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCity');
        return $pluginInfo ? $this->___callPlugins('getCity', func_get_args(), $pluginInfo) : parent::getCity();
    }

    /**
     * {@inheritdoc}
     */
    public function setCity($city)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCity');
        return $pluginInfo ? $this->___callPlugins('setCity', func_get_args(), $pluginInfo) : parent::setCity($city);
    }

    /**
     * {@inheritdoc}
     */
    public function getFirstname()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFirstname');
        return $pluginInfo ? $this->___callPlugins('getFirstname', func_get_args(), $pluginInfo) : parent::getFirstname();
    }

    /**
     * {@inheritdoc}
     */
    public function setFirstname($firstname)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFirstname');
        return $pluginInfo ? $this->___callPlugins('setFirstname', func_get_args(), $pluginInfo) : parent::setFirstname($firstname);
    }

    /**
     * {@inheritdoc}
     */
    public function getLastname()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastname');
        return $pluginInfo ? $this->___callPlugins('getLastname', func_get_args(), $pluginInfo) : parent::getLastname();
    }

    /**
     * {@inheritdoc}
     */
    public function setLastname($lastname)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLastname');
        return $pluginInfo ? $this->___callPlugins('setLastname', func_get_args(), $pluginInfo) : parent::setLastname($lastname);
    }

    /**
     * {@inheritdoc}
     */
    public function getMiddlename()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMiddlename');
        return $pluginInfo ? $this->___callPlugins('getMiddlename', func_get_args(), $pluginInfo) : parent::getMiddlename();
    }

    /**
     * {@inheritdoc}
     */
    public function setMiddlename($middlename)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMiddlename');
        return $pluginInfo ? $this->___callPlugins('setMiddlename', func_get_args(), $pluginInfo) : parent::setMiddlename($middlename);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrefix');
        return $pluginInfo ? $this->___callPlugins('getPrefix', func_get_args(), $pluginInfo) : parent::getPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function setPrefix($prefix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrefix');
        return $pluginInfo ? $this->___callPlugins('setPrefix', func_get_args(), $pluginInfo) : parent::setPrefix($prefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getSuffix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSuffix');
        return $pluginInfo ? $this->___callPlugins('getSuffix', func_get_args(), $pluginInfo) : parent::getSuffix();
    }

    /**
     * {@inheritdoc}
     */
    public function setSuffix($suffix)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSuffix');
        return $pluginInfo ? $this->___callPlugins('setSuffix', func_get_args(), $pluginInfo) : parent::setSuffix($suffix);
    }

    /**
     * {@inheritdoc}
     */
    public function getVatId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVatId');
        return $pluginInfo ? $this->___callPlugins('getVatId', func_get_args(), $pluginInfo) : parent::getVatId();
    }

    /**
     * {@inheritdoc}
     */
    public function setVatId($vatId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setVatId');
        return $pluginInfo ? $this->___callPlugins('setVatId', func_get_args(), $pluginInfo) : parent::setVatId($vatId);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerId');
        return $pluginInfo ? $this->___callPlugins('getCustomerId', func_get_args(), $pluginInfo) : parent::getCustomerId();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerId($customerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerId');
        return $pluginInfo ? $this->___callPlugins('setCustomerId', func_get_args(), $pluginInfo) : parent::setCustomerId($customerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getEmail()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmail');
        return $pluginInfo ? $this->___callPlugins('getEmail', func_get_args(), $pluginInfo) : parent::getEmail();
    }

    /**
     * {@inheritdoc}
     */
    public function setEmail($email)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmail');
        return $pluginInfo ? $this->___callPlugins('setEmail', func_get_args(), $pluginInfo) : parent::setEmail($email);
    }

    /**
     * {@inheritdoc}
     */
    public function setRegion($region)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRegion');
        return $pluginInfo ? $this->___callPlugins('setRegion', func_get_args(), $pluginInfo) : parent::setRegion($region);
    }

    /**
     * {@inheritdoc}
     */
    public function setRegionId($regionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRegionId');
        return $pluginInfo ? $this->___callPlugins('setRegionId', func_get_args(), $pluginInfo) : parent::setRegionId($regionId);
    }

    /**
     * {@inheritdoc}
     */
    public function setRegionCode($regionCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRegionCode');
        return $pluginInfo ? $this->___callPlugins('setRegionCode', func_get_args(), $pluginInfo) : parent::setRegionCode($regionCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getSameAsBilling()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSameAsBilling');
        return $pluginInfo ? $this->___callPlugins('getSameAsBilling', func_get_args(), $pluginInfo) : parent::getSameAsBilling();
    }

    /**
     * {@inheritdoc}
     */
    public function setSameAsBilling($sameAsBilling)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSameAsBilling');
        return $pluginInfo ? $this->___callPlugins('setSameAsBilling', func_get_args(), $pluginInfo) : parent::setSameAsBilling($sameAsBilling);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerAddressId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerAddressId');
        return $pluginInfo ? $this->___callPlugins('getCustomerAddressId', func_get_args(), $pluginInfo) : parent::getCustomerAddressId();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerAddressId($customerAddressId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerAddressId');
        return $pluginInfo ? $this->___callPlugins('setCustomerAddressId', func_get_args(), $pluginInfo) : parent::setCustomerAddressId($customerAddressId);
    }

    /**
     * {@inheritdoc}
     */
    public function getSaveInAddressBook()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSaveInAddressBook');
        return $pluginInfo ? $this->___callPlugins('getSaveInAddressBook', func_get_args(), $pluginInfo) : parent::getSaveInAddressBook();
    }

    /**
     * {@inheritdoc}
     */
    public function setSaveInAddressBook($saveInAddressBook)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSaveInAddressBook');
        return $pluginInfo ? $this->___callPlugins('setSaveInAddressBook', func_get_args(), $pluginInfo) : parent::setSaveInAddressBook($saveInAddressBook);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo) : parent::getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\Quote\Api\Data\AddressExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingMethod');
        return $pluginInfo ? $this->___callPlugins('getShippingMethod', func_get_args(), $pluginInfo) : parent::getShippingMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function getStreetLine($number)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStreetLine');
        return $pluginInfo ? $this->___callPlugins('getStreetLine', func_get_args(), $pluginInfo) : parent::getStreetLine($number);
    }

    /**
     * {@inheritdoc}
     */
    public function getStreetFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStreetFull');
        return $pluginInfo ? $this->___callPlugins('getStreetFull', func_get_args(), $pluginInfo) : parent::getStreetFull();
    }

    /**
     * {@inheritdoc}
     */
    public function setStreetFull($street)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStreetFull');
        return $pluginInfo ? $this->___callPlugins('setStreetFull', func_get_args(), $pluginInfo) : parent::setStreetFull($street);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function explodeStreetAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'explodeStreetAddress');
        return $pluginInfo ? $this->___callPlugins('explodeStreetAddress', func_get_args(), $pluginInfo) : parent::explodeStreetAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegion');
        return $pluginInfo ? $this->___callPlugins('getRegion', func_get_args(), $pluginInfo) : parent::getRegion();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegionCode');
        return $pluginInfo ? $this->___callPlugins('getRegionCode', func_get_args(), $pluginInfo) : parent::getRegionCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegionId');
        return $pluginInfo ? $this->___callPlugins('getRegionId', func_get_args(), $pluginInfo) : parent::getRegionId();
    }

    /**
     * {@inheritdoc}
     */
    public function getCountry()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountry');
        return $pluginInfo ? $this->___callPlugins('getCountry', func_get_args(), $pluginInfo) : parent::getCountry();
    }

    /**
     * {@inheritdoc}
     */
    public function getCountryModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountryModel');
        return $pluginInfo ? $this->___callPlugins('getCountryModel', func_get_args(), $pluginInfo) : parent::getCountryModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getRegionModel($regionId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRegionModel');
        return $pluginInfo ? $this->___callPlugins('getRegionModel', func_get_args(), $pluginInfo) : parent::getRegionModel($regionId);
    }

    /**
     * {@inheritdoc}
     */
    public function format($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'format');
        return $pluginInfo ? $this->___callPlugins('format', func_get_args(), $pluginInfo) : parent::format($type);
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfig');
        return $pluginInfo ? $this->___callPlugins('getConfig', func_get_args(), $pluginInfo) : parent::getConfig();
    }

    /**
     * {@inheritdoc}
     */
    public function getDataModel($defaultBillingAddressId = null, $defaultShippingAddressId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataModel');
        return $pluginInfo ? $this->___callPlugins('getDataModel', func_get_args(), $pluginInfo) : parent::getDataModel($defaultBillingAddressId, $defaultShippingAddressId);
    }

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate();
    }

    /**
     * {@inheritdoc}
     */
    public function unsRegion()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsRegion');
        return $pluginInfo ? $this->___callPlugins('unsRegion', func_get_args(), $pluginInfo) : parent::unsRegion();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo) : parent::getCustomAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo) : parent::getCustomAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo) : parent::setCustomAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo) : parent::setCustomAttribute($attributeCode, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo) : parent::setIdFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        return $pluginInfo ? $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo) : parent::isDeleted($isDeleted);
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        return $pluginInfo ? $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo) : parent::hasDataChanges();
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        return $pluginInfo ? $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo) : parent::setDataChanges($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        return $pluginInfo ? $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo) : parent::getOrigData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        return $pluginInfo ? $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo) : parent::setOrigData($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        return $pluginInfo ? $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo) : parent::dataHasChangedFor($field);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        return $pluginInfo ? $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo) : parent::getResourceName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        return $pluginInfo ? $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo) : parent::getResourceCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($modelId, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoad($identifier, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeLoad');
        return $pluginInfo ? $this->___callPlugins('beforeLoad', func_get_args(), $pluginInfo) : parent::beforeLoad($identifier, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad();
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        return $pluginInfo ? $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo) : parent::isSaveAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        return $pluginInfo ? $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo) : parent::setHasDataChanges($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        return $pluginInfo ? $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo) : parent::afterCommitCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        return $pluginInfo ? $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo) : parent::isObjectNew($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        return $pluginInfo ? $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo) : parent::validateBeforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        return $pluginInfo ? $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo) : parent::getCacheTags();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        return $pluginInfo ? $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo) : parent::cleanModelCache();
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        return $pluginInfo ? $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo) : parent::getEntityId();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        return $pluginInfo ? $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo) : parent::setEntityId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        return $pluginInfo ? $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo) : parent::clearInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        return $pluginInfo ? $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo) : parent::getStoredData();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        return $pluginInfo ? $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo) : parent::getEventPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
