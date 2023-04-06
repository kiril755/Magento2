<?php
namespace Magento\Sales\Model\Order\Invoice;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Invoice
 */
class Interceptor extends \Magento\Sales\Model\Order\Invoice implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Sales\Model\Order\Invoice\Config $invoiceConfig, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\Math\CalculatorFactory $calculatorFactory, \Magento\Sales\Model\ResourceModel\Order\Invoice\Item\CollectionFactory $invoiceItemCollectionFactory, \Magento\Sales\Model\Order\Invoice\CommentFactory $invoiceCommentFactory, \Magento\Sales\Model\ResourceModel\Order\Invoice\Comment\CollectionFactory $commentCollectionFactory, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $invoiceConfig, $orderFactory, $calculatorFactory, $invoiceItemCollectionFactory, $invoiceCommentFactory, $commentCollectionFactory, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function loadByIncrementId($incrementId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadByIncrementId');
        return $pluginInfo ? $this->___callPlugins('loadByIncrementId', func_get_args(), $pluginInfo) : parent::loadByIncrementId($incrementId);
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
    public function getStore()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStore');
        return $pluginInfo ? $this->___callPlugins('getStore', func_get_args(), $pluginInfo) : parent::getStore();
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder(\Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($order);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrder');
        return $pluginInfo ? $this->___callPlugins('getOrder', func_get_args(), $pluginInfo) : parent::getOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityType');
        return $pluginInfo ? $this->___callPlugins('getEntityType', func_get_args(), $pluginInfo) : parent::getEntityType();
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
    public function getShippingAddress()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAddress');
        return $pluginInfo ? $this->___callPlugins('getShippingAddress', func_get_args(), $pluginInfo) : parent::getShippingAddress();
    }

    /**
     * {@inheritdoc}
     */
    public function isCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCanceled');
        return $pluginInfo ? $this->___callPlugins('isCanceled', func_get_args(), $pluginInfo) : parent::isCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function canCapture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapture');
        return $pluginInfo ? $this->___callPlugins('canCapture', func_get_args(), $pluginInfo) : parent::canCapture();
    }

    /**
     * {@inheritdoc}
     */
    public function canVoid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canVoid');
        return $pluginInfo ? $this->___callPlugins('canVoid', func_get_args(), $pluginInfo) : parent::canVoid();
    }

    /**
     * {@inheritdoc}
     */
    public function canCancel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCancel');
        return $pluginInfo ? $this->___callPlugins('canCancel', func_get_args(), $pluginInfo) : parent::canCancel();
    }

    /**
     * {@inheritdoc}
     */
    public function canRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefund');
        return $pluginInfo ? $this->___callPlugins('canRefund', func_get_args(), $pluginInfo) : parent::canRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function capture()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture();
    }

    /**
     * {@inheritdoc}
     */
    public function pay()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pay');
        return $pluginInfo ? $this->___callPlugins('pay', func_get_args(), $pluginInfo) : parent::pay();
    }

    /**
     * {@inheritdoc}
     */
    public function wasPayCalled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'wasPayCalled');
        return $pluginInfo ? $this->___callPlugins('wasPayCalled', func_get_args(), $pluginInfo) : parent::wasPayCalled();
    }

    /**
     * {@inheritdoc}
     */
    public function void()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'void');
        return $pluginInfo ? $this->___callPlugins('void', func_get_args(), $pluginInfo) : parent::void();
    }

    /**
     * {@inheritdoc}
     */
    public function cancel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        return $pluginInfo ? $this->___callPlugins('cancel', func_get_args(), $pluginInfo) : parent::cancel();
    }

    /**
     * {@inheritdoc}
     */
    public function collectTotals()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectTotals');
        return $pluginInfo ? $this->___callPlugins('collectTotals', func_get_args(), $pluginInfo) : parent::collectTotals();
    }

    /**
     * {@inheritdoc}
     */
    public function roundPrice($price, $type = 'regular', $negative = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'roundPrice');
        return $pluginInfo ? $this->___callPlugins('roundPrice', func_get_args(), $pluginInfo) : parent::roundPrice($price, $type, $negative);
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
    public function getItemById($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemById');
        return $pluginInfo ? $this->___callPlugins('getItemById', func_get_args(), $pluginInfo) : parent::getItemById($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function addItem(\Magento\Sales\Model\Order\Invoice\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addItem');
        return $pluginInfo ? $this->___callPlugins('addItem', func_get_args(), $pluginInfo) : parent::addItem($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getStateName($stateId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStateName');
        return $pluginInfo ? $this->___callPlugins('getStateName', func_get_args(), $pluginInfo) : parent::getStateName($stateId);
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'register');
        return $pluginInfo ? $this->___callPlugins('register', func_get_args(), $pluginInfo) : parent::register();
    }

    /**
     * {@inheritdoc}
     */
    public function isLast()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLast');
        return $pluginInfo ? $this->___callPlugins('isLast', func_get_args(), $pluginInfo) : parent::isLast();
    }

    /**
     * {@inheritdoc}
     */
    public function addComment($comment, $notify = false, $visibleOnFront = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComment');
        return $pluginInfo ? $this->___callPlugins('addComment', func_get_args(), $pluginInfo) : parent::addComment($comment, $notify, $visibleOnFront);
    }

    /**
     * {@inheritdoc}
     */
    public function getCommentsCollection($reload = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCommentsCollection');
        return $pluginInfo ? $this->___callPlugins('getCommentsCollection', func_get_args(), $pluginInfo) : parent::getCommentsCollection($reload);
    }

    /**
     * {@inheritdoc}
     */
    public function reset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reset');
        return $pluginInfo ? $this->___callPlugins('reset', func_get_args(), $pluginInfo) : parent::reset();
    }

    /**
     * {@inheritdoc}
     */
    public function getItems()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItems');
        return $pluginInfo ? $this->___callPlugins('getItems', func_get_args(), $pluginInfo) : parent::getItems();
    }

    /**
     * {@inheritdoc}
     */
    public function getComments()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getComments');
        return $pluginInfo ? $this->___callPlugins('getComments', func_get_args(), $pluginInfo) : parent::getComments();
    }

    /**
     * {@inheritdoc}
     */
    public function getIncrementId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIncrementId');
        return $pluginInfo ? $this->___callPlugins('getIncrementId', func_get_args(), $pluginInfo) : parent::getIncrementId();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTotalRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTotalRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseTotalRefunded', func_get_args(), $pluginInfo) : parent::getBaseTotalRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountDescription');
        return $pluginInfo ? $this->___callPlugins('getDiscountDescription', func_get_args(), $pluginInfo) : parent::getDiscountDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function setItems($items)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItems');
        return $pluginInfo ? $this->___callPlugins('setItems', func_get_args(), $pluginInfo) : parent::setItems($items);
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getBaseCurrencyCode', func_get_args(), $pluginInfo) : parent::getBaseCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountAmount', func_get_args(), $pluginInfo) : parent::getBaseDiscountAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseGrandTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseGrandTotal');
        return $pluginInfo ? $this->___callPlugins('getBaseGrandTotal', func_get_args(), $pluginInfo) : parent::getBaseGrandTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseDiscountTaxCompensationAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::getBaseDiscountTaxCompensationAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingAmount', func_get_args(), $pluginInfo) : parent::getBaseShippingAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingDiscountTaxCompensationAmnt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingDiscountTaxCompensationAmnt');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingDiscountTaxCompensationAmnt', func_get_args(), $pluginInfo) : parent::getBaseShippingDiscountTaxCompensationAmnt();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingInclTax');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingInclTax', func_get_args(), $pluginInfo) : parent::getBaseShippingInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingTaxAmount', func_get_args(), $pluginInfo) : parent::getBaseShippingTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseSubtotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseSubtotal');
        return $pluginInfo ? $this->___callPlugins('getBaseSubtotal', func_get_args(), $pluginInfo) : parent::getBaseSubtotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseSubtotalInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseSubtotalInclTax');
        return $pluginInfo ? $this->___callPlugins('getBaseSubtotalInclTax', func_get_args(), $pluginInfo) : parent::getBaseSubtotalInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getBaseTaxAmount', func_get_args(), $pluginInfo) : parent::getBaseTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseToGlobalRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseToGlobalRate');
        return $pluginInfo ? $this->___callPlugins('getBaseToGlobalRate', func_get_args(), $pluginInfo) : parent::getBaseToGlobalRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseToOrderRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseToOrderRate');
        return $pluginInfo ? $this->___callPlugins('getBaseToOrderRate', func_get_args(), $pluginInfo) : parent::getBaseToOrderRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getBillingAddressId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBillingAddressId');
        return $pluginInfo ? $this->___callPlugins('getBillingAddressId', func_get_args(), $pluginInfo) : parent::getBillingAddressId();
    }

    /**
     * {@inheritdoc}
     */
    public function getCanVoidFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCanVoidFlag');
        return $pluginInfo ? $this->___callPlugins('getCanVoidFlag', func_get_args(), $pluginInfo) : parent::getCanVoidFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedAt');
        return $pluginInfo ? $this->___callPlugins('getCreatedAt', func_get_args(), $pluginInfo) : parent::getCreatedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt($createdAt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreatedAt');
        return $pluginInfo ? $this->___callPlugins('setCreatedAt', func_get_args(), $pluginInfo) : parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountAmount', func_get_args(), $pluginInfo) : parent::getDiscountAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmailSent()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmailSent');
        return $pluginInfo ? $this->___callPlugins('getEmailSent', func_get_args(), $pluginInfo) : parent::getEmailSent();
    }

    /**
     * {@inheritdoc}
     */
    public function getGlobalCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGlobalCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getGlobalCurrencyCode', func_get_args(), $pluginInfo) : parent::getGlobalCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getGrandTotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getGrandTotal');
        return $pluginInfo ? $this->___callPlugins('getGrandTotal', func_get_args(), $pluginInfo) : parent::getGrandTotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getDiscountTaxCompensationAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('getDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::getDiscountTaxCompensationAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsUsedForRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsUsedForRefund');
        return $pluginInfo ? $this->___callPlugins('getIsUsedForRefund', func_get_args(), $pluginInfo) : parent::getIsUsedForRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getOrderCurrencyCode', func_get_args(), $pluginInfo) : parent::getOrderCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getOrderId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrderId');
        return $pluginInfo ? $this->___callPlugins('getOrderId', func_get_args(), $pluginInfo) : parent::getOrderId();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAddressId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAddressId');
        return $pluginInfo ? $this->___callPlugins('getShippingAddressId', func_get_args(), $pluginInfo) : parent::getShippingAddressId();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingAmount');
        return $pluginInfo ? $this->___callPlugins('getShippingAmount', func_get_args(), $pluginInfo) : parent::getShippingAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingDiscountTaxCompensationAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('getShippingDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::getShippingDiscountTaxCompensationAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingInclTax');
        return $pluginInfo ? $this->___callPlugins('getShippingInclTax', func_get_args(), $pluginInfo) : parent::getShippingInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getShippingTaxAmount', func_get_args(), $pluginInfo) : parent::getShippingTaxAmount();
    }

    /**
     * {@inheritdoc}
     */
    public function getState()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getState');
        return $pluginInfo ? $this->___callPlugins('getState', func_get_args(), $pluginInfo) : parent::getState();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreCurrencyCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('getStoreCurrencyCode', func_get_args(), $pluginInfo) : parent::getStoreCurrencyCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        return $pluginInfo ? $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo) : parent::getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreToBaseRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreToBaseRate');
        return $pluginInfo ? $this->___callPlugins('getStoreToBaseRate', func_get_args(), $pluginInfo) : parent::getStoreToBaseRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreToOrderRate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreToOrderRate');
        return $pluginInfo ? $this->___callPlugins('getStoreToOrderRate', func_get_args(), $pluginInfo) : parent::getStoreToOrderRate();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubtotal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubtotal');
        return $pluginInfo ? $this->___callPlugins('getSubtotal', func_get_args(), $pluginInfo) : parent::getSubtotal();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubtotalInclTax()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubtotalInclTax');
        return $pluginInfo ? $this->___callPlugins('getSubtotalInclTax', func_get_args(), $pluginInfo) : parent::getSubtotalInclTax();
    }

    /**
     * {@inheritdoc}
     */
    public function getTaxAmount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTaxAmount');
        return $pluginInfo ? $this->___callPlugins('getTaxAmount', func_get_args(), $pluginInfo) : parent::getTaxAmount();
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
    public function getTransactionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransactionId');
        return $pluginInfo ? $this->___callPlugins('getTransactionId', func_get_args(), $pluginInfo) : parent::getTransactionId();
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionId($transactionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransactionId');
        return $pluginInfo ? $this->___callPlugins('setTransactionId', func_get_args(), $pluginInfo) : parent::setTransactionId($transactionId);
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('getUpdatedAt', func_get_args(), $pluginInfo) : parent::getUpdatedAt();
    }

    /**
     * {@inheritdoc}
     */
    public function setComments($comments)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setComments');
        return $pluginInfo ? $this->___callPlugins('setComments', func_get_args(), $pluginInfo) : parent::setComments($comments);
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt($timestamp)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUpdatedAt');
        return $pluginInfo ? $this->___callPlugins('setUpdatedAt', func_get_args(), $pluginInfo) : parent::setUpdatedAt($timestamp);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseGrandTotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseGrandTotal');
        return $pluginInfo ? $this->___callPlugins('setBaseGrandTotal', func_get_args(), $pluginInfo) : parent::setBaseGrandTotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setShippingTaxAmount', func_get_args(), $pluginInfo) : parent::setShippingTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setTaxAmount', func_get_args(), $pluginInfo) : parent::setTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseTaxAmount', func_get_args(), $pluginInfo) : parent::setBaseTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreToOrderRate($rate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreToOrderRate');
        return $pluginInfo ? $this->___callPlugins('setStoreToOrderRate', func_get_args(), $pluginInfo) : parent::setStoreToOrderRate($rate);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingTaxAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingTaxAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingTaxAmount', func_get_args(), $pluginInfo) : parent::setBaseShippingTaxAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountAmount', func_get_args(), $pluginInfo) : parent::setBaseDiscountAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseToOrderRate($rate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseToOrderRate');
        return $pluginInfo ? $this->___callPlugins('setBaseToOrderRate', func_get_args(), $pluginInfo) : parent::setBaseToOrderRate($rate);
    }

    /**
     * {@inheritdoc}
     */
    public function setGrandTotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGrandTotal');
        return $pluginInfo ? $this->___callPlugins('setGrandTotal', func_get_args(), $pluginInfo) : parent::setGrandTotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAmount');
        return $pluginInfo ? $this->___callPlugins('setShippingAmount', func_get_args(), $pluginInfo) : parent::setShippingAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setSubtotalInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSubtotalInclTax');
        return $pluginInfo ? $this->___callPlugins('setSubtotalInclTax', func_get_args(), $pluginInfo) : parent::setSubtotalInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseSubtotalInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseSubtotalInclTax');
        return $pluginInfo ? $this->___callPlugins('setBaseSubtotalInclTax', func_get_args(), $pluginInfo) : parent::setBaseSubtotalInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreToBaseRate($rate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreToBaseRate');
        return $pluginInfo ? $this->___callPlugins('setStoreToBaseRate', func_get_args(), $pluginInfo) : parent::setStoreToBaseRate($rate);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingAmount', func_get_args(), $pluginInfo) : parent::setBaseShippingAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setTotalQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTotalQty');
        return $pluginInfo ? $this->___callPlugins('setTotalQty', func_get_args(), $pluginInfo) : parent::setTotalQty($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseToGlobalRate($rate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseToGlobalRate');
        return $pluginInfo ? $this->___callPlugins('setBaseToGlobalRate', func_get_args(), $pluginInfo) : parent::setBaseToGlobalRate($rate);
    }

    /**
     * {@inheritdoc}
     */
    public function setSubtotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSubtotal');
        return $pluginInfo ? $this->___callPlugins('setSubtotal', func_get_args(), $pluginInfo) : parent::setSubtotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseSubtotal($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseSubtotal');
        return $pluginInfo ? $this->___callPlugins('setBaseSubtotal', func_get_args(), $pluginInfo) : parent::setBaseSubtotal($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountAmount');
        return $pluginInfo ? $this->___callPlugins('setDiscountAmount', func_get_args(), $pluginInfo) : parent::setDiscountAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBillingAddressId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBillingAddressId');
        return $pluginInfo ? $this->___callPlugins('setBillingAddressId', func_get_args(), $pluginInfo) : parent::setBillingAddressId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsUsedForRefund($isUsedForRefund)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsUsedForRefund');
        return $pluginInfo ? $this->___callPlugins('setIsUsedForRefund', func_get_args(), $pluginInfo) : parent::setIsUsedForRefund($isUsedForRefund);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderId');
        return $pluginInfo ? $this->___callPlugins('setOrderId', func_get_args(), $pluginInfo) : parent::setOrderId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setEmailSent($emailSent)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEmailSent');
        return $pluginInfo ? $this->___callPlugins('setEmailSent', func_get_args(), $pluginInfo) : parent::setEmailSent($emailSent);
    }

    /**
     * {@inheritdoc}
     */
    public function setCanVoidFlag($canVoidFlag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCanVoidFlag');
        return $pluginInfo ? $this->___callPlugins('setCanVoidFlag', func_get_args(), $pluginInfo) : parent::setCanVoidFlag($canVoidFlag);
    }

    /**
     * {@inheritdoc}
     */
    public function setState($state)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setState');
        return $pluginInfo ? $this->___callPlugins('setState', func_get_args(), $pluginInfo) : parent::setState($state);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAddressId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAddressId');
        return $pluginInfo ? $this->___callPlugins('setShippingAddressId', func_get_args(), $pluginInfo) : parent::setShippingAddressId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreCurrencyCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('setStoreCurrencyCode', func_get_args(), $pluginInfo) : parent::setStoreCurrencyCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrderCurrencyCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrderCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('setOrderCurrencyCode', func_get_args(), $pluginInfo) : parent::setOrderCurrencyCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseCurrencyCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('setBaseCurrencyCode', func_get_args(), $pluginInfo) : parent::setBaseCurrencyCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setGlobalCurrencyCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setGlobalCurrencyCode');
        return $pluginInfo ? $this->___callPlugins('setGlobalCurrencyCode', func_get_args(), $pluginInfo) : parent::setGlobalCurrencyCode($code);
    }

    /**
     * {@inheritdoc}
     */
    public function setIncrementId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIncrementId');
        return $pluginInfo ? $this->___callPlugins('setIncrementId', func_get_args(), $pluginInfo) : parent::setIncrementId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountTaxCompensationAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('setDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::setDiscountTaxCompensationAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseDiscountTaxCompensationAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('setBaseDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::setBaseDiscountTaxCompensationAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingDiscountTaxCompensationAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingDiscountTaxCompensationAmount');
        return $pluginInfo ? $this->___callPlugins('setShippingDiscountTaxCompensationAmount', func_get_args(), $pluginInfo) : parent::setShippingDiscountTaxCompensationAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingDiscountTaxCompensationAmnt($amnt)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingDiscountTaxCompensationAmnt');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingDiscountTaxCompensationAmnt', func_get_args(), $pluginInfo) : parent::setBaseShippingDiscountTaxCompensationAmnt($amnt);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingInclTax');
        return $pluginInfo ? $this->___callPlugins('setShippingInclTax', func_get_args(), $pluginInfo) : parent::setShippingInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingInclTax($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingInclTax');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingInclTax', func_get_args(), $pluginInfo) : parent::setBaseShippingInclTax($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseTotalRefunded($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseTotalRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseTotalRefunded', func_get_args(), $pluginInfo) : parent::setBaseTotalRefunded($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setDiscountDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDiscountDescription');
        return $pluginInfo ? $this->___callPlugins('setDiscountDescription', func_get_args(), $pluginInfo) : parent::setDiscountDescription($description);
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
    public function setExtensionAttributes(\Magento\Sales\Api\Data\InvoiceExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getEventObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventObject');
        return $pluginInfo ? $this->___callPlugins('getEventObject', func_get_args(), $pluginInfo) : parent::getEventObject();
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
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
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
