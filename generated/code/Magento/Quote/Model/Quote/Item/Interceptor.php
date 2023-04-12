<?php
namespace Magento\Quote\Model\Quote\Item;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Model\Status\ListFactory $statusListFactory, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Quote\Model\Quote\Item\OptionFactory $itemOptionFactory, \Magento\Quote\Model\Quote\Item\Compare $quoteItemCompare, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Quote\Model\Quote\Item\Option\ComparatorInterface $itemOptionComparator = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $productRepository, $priceCurrency, $statusListFactory, $localeFormat, $itemOptionFactory, $quoteItemCompare, $stockRegistry, $resource, $resourceCollection, $data, $serializer, $itemOptionComparator);
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
    public function getAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddress');
        return $pluginInfo ? $this->___callPlugins('getAddress', func_get_args(), $pluginInfo) : parent::getAddress();
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
    public function addQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addQty');
        return $pluginInfo ? $this->___callPlugins('addQty', func_get_args(), $pluginInfo) : parent::addQty($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function setQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQty');
        return $pluginInfo ? $this->___callPlugins('setQty', func_get_args(), $pluginInfo) : parent::setQty($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyOptions');
        return $pluginInfo ? $this->___callPlugins('getQtyOptions', func_get_args(), $pluginInfo) : parent::getQtyOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyOptions($qtyOptions)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyOptions');
        return $pluginInfo ? $this->___callPlugins('setQtyOptions', func_get_args(), $pluginInfo) : parent::setQtyOptions($qtyOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function setProduct($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProduct');
        return $pluginInfo ? $this->___callPlugins('setProduct', func_get_args(), $pluginInfo) : parent::setProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function representProduct($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'representProduct');
        return $pluginInfo ? $this->___callPlugins('representProduct', func_get_args(), $pluginInfo) : parent::representProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function compareOptions($options1, $options2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'compareOptions');
        return $pluginInfo ? $this->___callPlugins('compareOptions', func_get_args(), $pluginInfo) : parent::compareOptions($options1, $options2);
    }

    /**
     * {@inheritdoc}
     */
    public function compare($item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'compare');
        return $pluginInfo ? $this->___callPlugins('compare', func_get_args(), $pluginInfo) : parent::compare($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductType');
        return $pluginInfo ? $this->___callPlugins('getProductType', func_get_args(), $pluginInfo) : parent::getProductType();
    }

    /**
     * {@inheritdoc}
     */
    public function getRealProductType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRealProductType');
        return $pluginInfo ? $this->___callPlugins('getRealProductType', func_get_args(), $pluginInfo) : parent::getRealProductType();
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
    public function setOptions($options)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOptions');
        return $pluginInfo ? $this->___callPlugins('setOptions', func_get_args(), $pluginInfo) : parent::setOptions($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptions');
        return $pluginInfo ? $this->___callPlugins('getOptions', func_get_args(), $pluginInfo) : parent::getOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsByCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsByCode');
        return $pluginInfo ? $this->___callPlugins('getOptionsByCode', func_get_args(), $pluginInfo) : parent::getOptionsByCode();
    }

    /**
     * {@inheritdoc}
     */
    public function addOption($option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOption');
        return $pluginInfo ? $this->___callPlugins('addOption', func_get_args(), $pluginInfo) : parent::addOption($option);
    }

    /**
     * {@inheritdoc}
     */
    public function updateQtyOption(\Magento\Framework\DataObject $option, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateQtyOption');
        return $pluginInfo ? $this->___callPlugins('updateQtyOption', func_get_args(), $pluginInfo) : parent::updateQtyOption($option, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function removeOption($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeOption');
        return $pluginInfo ? $this->___callPlugins('removeOption', func_get_args(), $pluginInfo) : parent::removeOption($code);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionByCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionByCode');
        return $pluginInfo ? $this->___callPlugins('getOptionByCode', func_get_args(), $pluginInfo) : parent::getOptionByCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function saveItemOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveItemOptions');
        return $pluginInfo ? $this->___callPlugins('saveItemOptions', func_get_args(), $pluginInfo) : parent::saveItemOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsOptionsSaved($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsOptionsSaved');
        return $pluginInfo ? $this->___callPlugins('setIsOptionsSaved', func_get_args(), $pluginInfo) : parent::setIsOptionsSaved($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function isOptionsSaved()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOptionsSaved');
        return $pluginInfo ? $this->___callPlugins('isOptionsSaved', func_get_args(), $pluginInfo) : parent::isOptionsSaved();
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
    public function getBuyRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBuyRequest');
        return $pluginInfo ? $this->___callPlugins('getBuyRequest', func_get_args(), $pluginInfo) : parent::getBuyRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasError($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasError');
        return $pluginInfo ? $this->___callPlugins('setHasError', func_get_args(), $pluginInfo) : parent::setHasError($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function addErrorInfo($origin = null, $code = null, $message = null, $additionalData = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addErrorInfo');
        return $pluginInfo ? $this->___callPlugins('addErrorInfo', func_get_args(), $pluginInfo) : parent::addErrorInfo($origin, $code, $message, $additionalData);
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorInfos()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getErrorInfos');
        return $pluginInfo ? $this->___callPlugins('getErrorInfos', func_get_args(), $pluginInfo) : parent::getErrorInfos();
    }

    /**
     * {@inheritdoc}
     */
    public function removeErrorInfosByParams($params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeErrorInfosByParams');
        return $pluginInfo ? $this->___callPlugins('removeErrorInfosByParams', func_get_args(), $pluginInfo) : parent::removeErrorInfosByParams($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemId');
        return $pluginInfo ? $this->___callPlugins('getItemId', func_get_args(), $pluginInfo) : parent::getItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function setItemId($itemID)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemId');
        return $pluginInfo ? $this->___callPlugins('setItemId', func_get_args(), $pluginInfo) : parent::setItemId($itemID);
    }

    /**
     * {@inheritdoc}
     */
    public function getSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        return $pluginInfo ? $this->___callPlugins('getSku', func_get_args(), $pluginInfo) : parent::getSku();
    }

    /**
     * {@inheritdoc}
     */
    public function setSku($sku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSku');
        return $pluginInfo ? $this->___callPlugins('setSku', func_get_args(), $pluginInfo) : parent::setSku($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function getQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        return $pluginInfo ? $this->___callPlugins('getQty', func_get_args(), $pluginInfo) : parent::getQty();
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
    public function setName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setName');
        return $pluginInfo ? $this->___callPlugins('setName', func_get_args(), $pluginInfo) : parent::setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPrice');
        return $pluginInfo ? $this->___callPlugins('getPrice', func_get_args(), $pluginInfo) : parent::getPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPrice');
        return $pluginInfo ? $this->___callPlugins('setPrice', func_get_args(), $pluginInfo) : parent::setPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductType($productType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductType');
        return $pluginInfo ? $this->___callPlugins('setProductType', func_get_args(), $pluginInfo) : parent::setProductType($productType);
    }

    /**
     * {@inheritdoc}
     */
    public function getQuoteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuoteId');
        return $pluginInfo ? $this->___callPlugins('getQuoteId', func_get_args(), $pluginInfo) : parent::getQuoteId();
    }

    /**
     * {@inheritdoc}
     */
    public function setQuoteId($quoteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuoteId');
        return $pluginInfo ? $this->___callPlugins('setQuoteId', func_get_args(), $pluginInfo) : parent::setQuoteId($quoteId);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductOption()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductOption');
        return $pluginInfo ? $this->___callPlugins('getProductOption', func_get_args(), $pluginInfo) : parent::getProductOption();
    }

    /**
     * {@inheritdoc}
     */
    public function setProductOption(\Magento\Quote\Api\Data\ProductOptionInterface $productOption)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductOption');
        return $pluginInfo ? $this->___callPlugins('setProductOption', func_get_args(), $pluginInfo) : parent::setProductOption($productOption);
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
    public function setExtensionAttributes(\Magento\Quote\Api\Data\CartItemExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getProduct()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProduct');
        return $pluginInfo ? $this->___callPlugins('getProduct', func_get_args(), $pluginInfo) : parent::getProduct();
    }

    /**
     * {@inheritdoc}
     */
    public function getFileDownloadParams()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileDownloadParams');
        return $pluginInfo ? $this->___callPlugins('getFileDownloadParams', func_get_args(), $pluginInfo) : parent::getFileDownloadParams();
    }

    /**
     * {@inheritdoc}
     */
    public function setParentItem($parentItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentItem');
        return $pluginInfo ? $this->___callPlugins('setParentItem', func_get_args(), $pluginInfo) : parent::setParentItem($parentItem);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentItem()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentItem');
        return $pluginInfo ? $this->___callPlugins('getParentItem', func_get_args(), $pluginInfo) : parent::getParentItem();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function addChild($child)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        return $pluginInfo ? $this->___callPlugins('addChild', func_get_args(), $pluginInfo) : parent::addChild($child);
    }

    /**
     * {@inheritdoc}
     */
    public function setMessage($messages)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMessage');
        return $pluginInfo ? $this->___callPlugins('setMessage', func_get_args(), $pluginInfo) : parent::setMessage($messages);
    }

    /**
     * {@inheritdoc}
     */
    public function addMessage($message)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMessage');
        return $pluginInfo ? $this->___callPlugins('addMessage', func_get_args(), $pluginInfo) : parent::addMessage($message);
    }

    /**
     * {@inheritdoc}
     */
    public function getMessage($string = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMessage');
        return $pluginInfo ? $this->___callPlugins('getMessage', func_get_args(), $pluginInfo) : parent::getMessage($string);
    }

    /**
     * {@inheritdoc}
     */
    public function removeMessageByText($text)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeMessageByText');
        return $pluginInfo ? $this->___callPlugins('removeMessageByText', func_get_args(), $pluginInfo) : parent::removeMessageByText($text);
    }

    /**
     * {@inheritdoc}
     */
    public function clearMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearMessage');
        return $pluginInfo ? $this->___callPlugins('clearMessage', func_get_args(), $pluginInfo) : parent::clearMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function checkData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkData');
        return $pluginInfo ? $this->___callPlugins('checkData', func_get_args(), $pluginInfo) : parent::checkData();
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalQty');
        return $pluginInfo ? $this->___callPlugins('getTotalQty', func_get_args(), $pluginInfo) : parent::getTotalQty();
    }

    /**
     * {@inheritdoc}
     */
    public function calcRowTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'calcRowTotal');
        return $pluginInfo ? $this->___callPlugins('calcRowTotal', func_get_args(), $pluginInfo) : parent::calcRowTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculationPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCalculationPrice');
        return $pluginInfo ? $this->___callPlugins('getCalculationPrice', func_get_args(), $pluginInfo) : parent::getCalculationPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getCalculationPriceOriginal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCalculationPriceOriginal');
        return $pluginInfo ? $this->___callPlugins('getCalculationPriceOriginal', func_get_args(), $pluginInfo) : parent::getCalculationPriceOriginal();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCalculationPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCalculationPrice');
        return $pluginInfo ? $this->___callPlugins('getBaseCalculationPrice', func_get_args(), $pluginInfo) : parent::getBaseCalculationPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCalculationPriceOriginal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCalculationPriceOriginal');
        return $pluginInfo ? $this->___callPlugins('getBaseCalculationPriceOriginal', func_get_args(), $pluginInfo) : parent::getBaseCalculationPriceOriginal();
    }

    /**
     * {@inheritdoc}
     */
    public function getOriginalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('getOriginalPrice', func_get_args(), $pluginInfo) : parent::getOriginalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setOriginalPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('setOriginalPrice', func_get_args(), $pluginInfo) : parent::setOriginalPrice($price);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseOriginalPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseOriginalPrice');
        return $pluginInfo ? $this->___callPlugins('getBaseOriginalPrice', func_get_args(), $pluginInfo) : parent::getBaseOriginalPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomPrice($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomPrice');
        return $pluginInfo ? $this->___callPlugins('setCustomPrice', func_get_args(), $pluginInfo) : parent::setCustomPrice($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getConvertedPrice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConvertedPrice');
        return $pluginInfo ? $this->___callPlugins('getConvertedPrice', func_get_args(), $pluginInfo) : parent::getConvertedPrice();
    }

    /**
     * {@inheritdoc}
     */
    public function setConvertedPrice($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setConvertedPrice');
        return $pluginInfo ? $this->___callPlugins('setConvertedPrice', func_get_args(), $pluginInfo) : parent::setConvertedPrice($value);
    }

    /**
     * {@inheritdoc}
     */
    public function isChildrenCalculated()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isChildrenCalculated');
        return $pluginInfo ? $this->___callPlugins('isChildrenCalculated', func_get_args(), $pluginInfo) : parent::isChildrenCalculated();
    }

    /**
     * {@inheritdoc}
     */
    public function isShipSeparately()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isShipSeparately');
        return $pluginInfo ? $this->___callPlugins('isShipSeparately', func_get_args(), $pluginInfo) : parent::isShipSeparately();
    }

    /**
     * {@inheritdoc}
     */
    public function getTotalDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTotalDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getTotalDiscountAmount', func_get_args(), $pluginInfo) : parent::getTotalDiscountAmount();
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
