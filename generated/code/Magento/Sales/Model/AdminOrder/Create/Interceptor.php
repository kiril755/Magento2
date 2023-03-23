<?php
namespace Magento\Sales\Model\AdminOrder\Create;

/**
 * Interceptor class for @see \Magento\Sales\Model\AdminOrder\Create
 */
class Interceptor extends \Magento\Sales\Model\AdminOrder\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Registry $coreRegistry, \Magento\Sales\Model\Config $salesConfig, \Magento\Backend\Model\Session\Quote $quoteSession, \Psr\Log\LoggerInterface $logger, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Sales\Model\AdminOrder\Product\Quote\Initializer $quoteInitializer, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory, \Magento\Customer\Model\Metadata\FormFactory $metadataFormFactory, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Sales\Model\AdminOrder\EmailSender $emailSender, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Quote\Model\Quote\Item\Updater $quoteItemUpdater, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Customer\Model\Customer\Mapper $customerMapper, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Quote\Model\QuoteFactory $quoteFactory, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Quote\Model\Quote\Address\CustomAttributeListInterface $customAttributeList = null)
    {
        $this->___init();
        parent::__construct($objectManager, $eventManager, $coreRegistry, $salesConfig, $quoteSession, $logger, $objectCopyService, $messageManager, $quoteInitializer, $customerRepository, $addressRepository, $addressFactory, $metadataFormFactory, $groupRepository, $scopeConfig, $emailSender, $stockRegistry, $quoteItemUpdater, $objectFactory, $quoteRepository, $accountManagement, $customerFactory, $customerMapper, $quoteManagement, $dataObjectHelper, $orderManagement, $quoteFactory, $data, $serializer, $dataObjectConverter, $storeManager, $customAttributeList);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsValidate($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsValidate');
        return $pluginInfo ? $this->___callPlugins('setIsValidate', func_get_args(), $pluginInfo) : parent::setIsValidate($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsValidate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsValidate');
        return $pluginInfo ? $this->___callPlugins('getIsValidate', func_get_args(), $pluginInfo) : parent::getIsValidate();
    }

    /**
     * {@inheritdoc}
     */
    public function initRuleData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initRuleData');
        return $pluginInfo ? $this->___callPlugins('initRuleData', func_get_args(), $pluginInfo) : parent::initRuleData();
    }

    /**
     * {@inheritdoc}
     */
    public function setRecollect($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRecollect');
        return $pluginInfo ? $this->___callPlugins('setRecollect', func_get_args(), $pluginInfo) : parent::setRecollect($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function recollectCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'recollectCart');
        return $pluginInfo ? $this->___callPlugins('recollectCart', func_get_args(), $pluginInfo) : parent::recollectCart();
    }

    /**
     * {@inheritdoc}
     */
    public function saveQuote()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveQuote');
        return $pluginInfo ? $this->___callPlugins('saveQuote', func_get_args(), $pluginInfo) : parent::saveQuote();
    }

    /**
     * {@inheritdoc}
     */
    public function getSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSession');
        return $pluginInfo ? $this->___callPlugins('getSession', func_get_args(), $pluginInfo) : parent::getSession();
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
    public function initFromOrder(\Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initFromOrder');
        return $pluginInfo ? $this->___callPlugins('initFromOrder', func_get_args(), $pluginInfo) : parent::initFromOrder($order);
    }

    /**
     * {@inheritdoc}
     */
    public function initFromOrderItem(\Magento\Sales\Model\Order\Item $orderItem, $qty = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initFromOrderItem');
        return $pluginInfo ? $this->___callPlugins('initFromOrderItem', func_get_args(), $pluginInfo) : parent::initFromOrderItem($orderItem, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerWishlist($cacheReload = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerWishlist');
        return $pluginInfo ? $this->___callPlugins('getCustomerWishlist', func_get_args(), $pluginInfo) : parent::getCustomerWishlist($cacheReload);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerCart()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerCart');
        return $pluginInfo ? $this->___callPlugins('getCustomerCart', func_get_args(), $pluginInfo) : parent::getCustomerCart();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerCompareList()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerCompareList');
        return $pluginInfo ? $this->___callPlugins('getCustomerCompareList', func_get_args(), $pluginInfo) : parent::getCustomerCompareList();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo) : parent::getCustomerGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function moveQuoteItem($item, $moveTo, $qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'moveQuoteItem');
        return $pluginInfo ? $this->___callPlugins('moveQuoteItem', func_get_args(), $pluginInfo) : parent::moveQuoteItem($item, $moveTo, $qty);
    }

    /**
     * {@inheritdoc}
     */
    public function applySidebarData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applySidebarData');
        return $pluginInfo ? $this->___callPlugins('applySidebarData', func_get_args(), $pluginInfo) : parent::applySidebarData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function removeItem($itemId, $from)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeItem');
        return $pluginInfo ? $this->___callPlugins('removeItem', func_get_args(), $pluginInfo) : parent::removeItem($itemId, $from);
    }

    /**
     * {@inheritdoc}
     */
    public function removeQuoteItem($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeQuoteItem');
        return $pluginInfo ? $this->___callPlugins('removeQuoteItem', func_get_args(), $pluginInfo) : parent::removeQuoteItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function addProduct($product, $config = 1)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProduct');
        return $pluginInfo ? $this->___callPlugins('addProduct', func_get_args(), $pluginInfo) : parent::addProduct($product, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function addProducts(array $products)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addProducts');
        return $pluginInfo ? $this->___callPlugins('addProducts', func_get_args(), $pluginInfo) : parent::addProducts($products);
    }

    /**
     * {@inheritdoc}
     */
    public function updateQuoteItems($items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQuoteItems');
        return $pluginInfo ? $this->___callPlugins('updateQuoteItems', func_get_args(), $pluginInfo) : parent::updateQuoteItems($items);
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAddress');
        return $pluginInfo ? $this->___callPlugins('getShippingAddress', func_get_args(), $pluginInfo) : parent::getShippingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAddress($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAddress');
        return $pluginInfo ? $this->___callPlugins('setShippingAddress', func_get_args(), $pluginInfo) : parent::setShippingAddress($address);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAsBilling($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAsBilling');
        return $pluginInfo ? $this->___callPlugins('setShippingAsBilling', func_get_args(), $pluginInfo) : parent::setShippingAsBilling($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getBillingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBillingAddress');
        return $pluginInfo ? $this->___callPlugins('getBillingAddress', func_get_args(), $pluginInfo) : parent::getBillingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function setBillingAddress($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBillingAddress');
        return $pluginInfo ? $this->___callPlugins('setBillingAddress', func_get_args(), $pluginInfo) : parent::setBillingAddress($address);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingMethod');
        return $pluginInfo ? $this->___callPlugins('setShippingMethod', func_get_args(), $pluginInfo) : parent::setShippingMethod($method);
    }

    /**
     * {@inheritdoc}
     */
    public function resetShippingMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetShippingMethod');
        return $pluginInfo ? $this->___callPlugins('resetShippingMethod', func_get_args(), $pluginInfo) : parent::resetShippingMethod();
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
    public function collectRates()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectRates');
        return $pluginInfo ? $this->___callPlugins('collectRates', func_get_args(), $pluginInfo) : parent::collectRates();
    }

    /**
     * {@inheritdoc}
     */
    public function setPaymentMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPaymentMethod');
        return $pluginInfo ? $this->___callPlugins('setPaymentMethod', func_get_args(), $pluginInfo) : parent::setPaymentMethod($method);
    }

    /**
     * {@inheritdoc}
     */
    public function setPaymentData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPaymentData');
        return $pluginInfo ? $this->___callPlugins('setPaymentData', func_get_args(), $pluginInfo) : parent::setPaymentData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function applyCoupon($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'applyCoupon');
        return $pluginInfo ? $this->___callPlugins('applyCoupon', func_get_args(), $pluginInfo) : parent::applyCoupon($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountData($accountData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAccountData');
        return $pluginInfo ? $this->___callPlugins('setAccountData', func_get_args(), $pluginInfo) : parent::setAccountData($accountData);
    }

    /**
     * {@inheritdoc}
     */
    public function importPostData($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importPostData');
        return $pluginInfo ? $this->___callPlugins('importPostData', func_get_args(), $pluginInfo) : parent::importPostData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function _prepareCustomer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '_prepareCustomer');
        return $pluginInfo ? $this->___callPlugins('_prepareCustomer', func_get_args(), $pluginInfo) : parent::_prepareCustomer();
    }

    /**
     * {@inheritdoc}
     */
    public function createOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createOrder');
        return $pluginInfo ? $this->___callPlugins('createOrder', func_get_args(), $pluginInfo) : parent::createOrder();
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
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
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
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
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
