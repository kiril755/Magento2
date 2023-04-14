<?php
namespace Magento\Sales\Model\Order\Payment;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Payment
 */
class Interceptor extends \Magento\Sales\Model\Order\Payment implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Sales\Model\Order\CreditmemoFactory $creditmemoFactory, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository, \Magento\Sales\Model\Order\Payment\Transaction\ManagerInterface $transactionManager, \Magento\Sales\Model\Order\Payment\Transaction\BuilderInterface $transactionBuilder, \Magento\Sales\Model\Order\Payment\Processor $paymentProcessor, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Sales\Api\CreditmemoManagementInterface $creditmemoManager = null, ?\Magento\Sales\Model\Order\Payment\Operations\SaleOperation $saleOperation = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $encryptor, $creditmemoFactory, $priceCurrency, $transactionRepository, $transactionManager, $transactionBuilder, $paymentProcessor, $orderRepository, $resource, $resourceCollection, $data, $creditmemoManager, $saleOperation);
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
    public function setTransactionId($transactionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransactionId');
        return $pluginInfo ? $this->___callPlugins('setTransactionId', func_get_args(), $pluginInfo) : parent::setTransactionId($transactionId);
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
    public function setIsTransactionClosed($isClosed)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsTransactionClosed');
        return $pluginInfo ? $this->___callPlugins('setIsTransactionClosed', func_get_args(), $pluginInfo) : parent::setIsTransactionClosed($isClosed);
    }

    /**
     * {@inheritdoc}
     */
    public function getParentTransactionId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentTransactionId');
        return $pluginInfo ? $this->___callPlugins('getParentTransactionId', func_get_args(), $pluginInfo) : parent::getParentTransactionId();
    }

    /**
     * {@inheritdoc}
     */
    public function setParentTransactionId($txnId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentTransactionId');
        return $pluginInfo ? $this->___callPlugins('setParentTransactionId', func_get_args(), $pluginInfo) : parent::setParentTransactionId($txnId);
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
    public function canRefund()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefund');
        return $pluginInfo ? $this->___callPlugins('canRefund', func_get_args(), $pluginInfo) : parent::canRefund();
    }

    /**
     * {@inheritdoc}
     */
    public function canRefundPartialPerInvoice()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRefundPartialPerInvoice');
        return $pluginInfo ? $this->___callPlugins('canRefundPartialPerInvoice', func_get_args(), $pluginInfo) : parent::canRefundPartialPerInvoice();
    }

    /**
     * {@inheritdoc}
     */
    public function canCapturePartial()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapturePartial');
        return $pluginInfo ? $this->___callPlugins('canCapturePartial', func_get_args(), $pluginInfo) : parent::canCapturePartial();
    }

    /**
     * {@inheritdoc}
     */
    public function place()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'place');
        return $pluginInfo ? $this->___callPlugins('place', func_get_args(), $pluginInfo) : parent::place();
    }

    /**
     * {@inheritdoc}
     */
    public function capture($invoice = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture($invoice);
    }

    /**
     * {@inheritdoc}
     */
    public function registerCaptureNotification($amount, $skipFraudDetection = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerCaptureNotification');
        return $pluginInfo ? $this->___callPlugins('registerCaptureNotification', func_get_args(), $pluginInfo) : parent::registerCaptureNotification($amount, $skipFraudDetection);
    }

    /**
     * {@inheritdoc}
     */
    public function registerAuthorizationNotification($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerAuthorizationNotification');
        return $pluginInfo ? $this->___callPlugins('registerAuthorizationNotification', func_get_args(), $pluginInfo) : parent::registerAuthorizationNotification($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function pay($invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'pay');
        return $pluginInfo ? $this->___callPlugins('pay', func_get_args(), $pluginInfo) : parent::pay($invoice);
    }

    /**
     * {@inheritdoc}
     */
    public function cancelInvoice($invoice)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancelInvoice');
        return $pluginInfo ? $this->___callPlugins('cancelInvoice', func_get_args(), $pluginInfo) : parent::cancelInvoice($invoice);
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
    public function void(\Magento\Framework\DataObject $document)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'void');
        return $pluginInfo ? $this->___callPlugins('void', func_get_args(), $pluginInfo) : parent::void($document);
    }

    /**
     * {@inheritdoc}
     */
    public function registerVoidNotification($amount = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerVoidNotification');
        return $pluginInfo ? $this->___callPlugins('registerVoidNotification', func_get_args(), $pluginInfo) : parent::registerVoidNotification($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setCreditmemo(\Magento\Sales\Model\Order\Creditmemo $creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCreditmemo');
        return $pluginInfo ? $this->___callPlugins('setCreditmemo', func_get_args(), $pluginInfo) : parent::setCreditmemo($creditmemo);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreditmemo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreditmemo');
        return $pluginInfo ? $this->___callPlugins('getCreditmemo', func_get_args(), $pluginInfo) : parent::getCreditmemo();
    }

    /**
     * {@inheritdoc}
     */
    public function refund($creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refund');
        return $pluginInfo ? $this->___callPlugins('refund', func_get_args(), $pluginInfo) : parent::refund($creditmemo);
    }

    /**
     * {@inheritdoc}
     */
    public function registerRefundNotification($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerRefundNotification');
        return $pluginInfo ? $this->___callPlugins('registerRefundNotification', func_get_args(), $pluginInfo) : parent::registerRefundNotification($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function cancelCreditmemo($creditmemo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancelCreditmemo');
        return $pluginInfo ? $this->___callPlugins('cancelCreditmemo', func_get_args(), $pluginInfo) : parent::cancelCreditmemo($creditmemo);
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
    public function canReviewPayment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReviewPayment');
        return $pluginInfo ? $this->___callPlugins('canReviewPayment', func_get_args(), $pluginInfo) : parent::canReviewPayment();
    }

    /**
     * {@inheritdoc}
     */
    public function canFetchTransactionInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canFetchTransactionInfo');
        return $pluginInfo ? $this->___callPlugins('canFetchTransactionInfo', func_get_args(), $pluginInfo) : parent::canFetchTransactionInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function accept()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'accept');
        return $pluginInfo ? $this->___callPlugins('accept', func_get_args(), $pluginInfo) : parent::accept();
    }

    /**
     * {@inheritdoc}
     */
    public function deny($isOnline = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deny');
        return $pluginInfo ? $this->___callPlugins('deny', func_get_args(), $pluginInfo) : parent::deny($isOnline);
    }

    /**
     * {@inheritdoc}
     */
    public function update($isOnline = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($isOnline);
    }

    /**
     * {@inheritdoc}
     */
    public function authorize($isOnline, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorize');
        return $pluginInfo ? $this->___callPlugins('authorize', func_get_args(), $pluginInfo) : parent::authorize($isOnline, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function addTransaction($type, $salesDocument = null, $failSafe = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTransaction');
        return $pluginInfo ? $this->___callPlugins('addTransaction', func_get_args(), $pluginInfo) : parent::addTransaction($type, $salesDocument, $failSafe);
    }

    /**
     * {@inheritdoc}
     */
    public function addTransactionCommentsToOrder($transaction, $message)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addTransactionCommentsToOrder');
        return $pluginInfo ? $this->___callPlugins('addTransactionCommentsToOrder', func_get_args(), $pluginInfo) : parent::addTransactionCommentsToOrder($transaction, $message);
    }

    /**
     * {@inheritdoc}
     */
    public function importTransactionInfo(\Magento\Sales\Model\Order\Payment\Transaction $transactionTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importTransactionInfo');
        return $pluginInfo ? $this->___callPlugins('importTransactionInfo', func_get_args(), $pluginInfo) : parent::importTransactionInfo($transactionTo);
    }

    /**
     * {@inheritdoc}
     */
    public function prependMessage($messagePrependTo)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prependMessage');
        return $pluginInfo ? $this->___callPlugins('prependMessage', func_get_args(), $pluginInfo) : parent::prependMessage($messagePrependTo);
    }

    /**
     * {@inheritdoc}
     */
    public function formatAmount($amount, $asFloat = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatAmount');
        return $pluginInfo ? $this->___callPlugins('formatAmount', func_get_args(), $pluginInfo) : parent::formatAmount($amount, $asFloat);
    }

    /**
     * {@inheritdoc}
     */
    public function formatPrice($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrice');
        return $pluginInfo ? $this->___callPlugins('formatPrice', func_get_args(), $pluginInfo) : parent::formatPrice($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthorizationTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAuthorizationTransaction');
        return $pluginInfo ? $this->___callPlugins('getAuthorizationTransaction', func_get_args(), $pluginInfo) : parent::getAuthorizationTransaction();
    }

    /**
     * {@inheritdoc}
     */
    public function isCaptureFinal($amountToCapture)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isCaptureFinal');
        return $pluginInfo ? $this->___callPlugins('isCaptureFinal', func_get_args(), $pluginInfo) : parent::isCaptureFinal($amountToCapture);
    }

    /**
     * {@inheritdoc}
     */
    public function isSameCurrency()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSameCurrency');
        return $pluginInfo ? $this->___callPlugins('isSameCurrency', func_get_args(), $pluginInfo) : parent::isSameCurrency();
    }

    /**
     * {@inheritdoc}
     */
    public function setTransactionAdditionalInfo($key, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransactionAdditionalInfo');
        return $pluginInfo ? $this->___callPlugins('setTransactionAdditionalInfo', func_get_args(), $pluginInfo) : parent::setTransactionAdditionalInfo($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getTransactionAdditionalInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTransactionAdditionalInfo');
        return $pluginInfo ? $this->___callPlugins('getTransactionAdditionalInfo', func_get_args(), $pluginInfo) : parent::getTransactionAdditionalInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function resetTransactionAdditionalInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resetTransactionAdditionalInfo');
        return $pluginInfo ? $this->___callPlugins('resetTransactionAdditionalInfo', func_get_args(), $pluginInfo) : parent::resetTransactionAdditionalInfo();
    }

    /**
     * {@inheritdoc}
     */
    public function getAccountStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAccountStatus');
        return $pluginInfo ? $this->___callPlugins('getAccountStatus', func_get_args(), $pluginInfo) : parent::getAccountStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalData');
        return $pluginInfo ? $this->___callPlugins('getAdditionalData', func_get_args(), $pluginInfo) : parent::getAdditionalData();
    }

    /**
     * {@inheritdoc}
     */
    public function getAddressStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddressStatus');
        return $pluginInfo ? $this->___callPlugins('getAddressStatus', func_get_args(), $pluginInfo) : parent::getAddressStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountAuthorized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountAuthorized');
        return $pluginInfo ? $this->___callPlugins('getAmountAuthorized', func_get_args(), $pluginInfo) : parent::getAmountAuthorized();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountCanceled');
        return $pluginInfo ? $this->___callPlugins('getAmountCanceled', func_get_args(), $pluginInfo) : parent::getAmountCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountOrdered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountOrdered');
        return $pluginInfo ? $this->___callPlugins('getAmountOrdered', func_get_args(), $pluginInfo) : parent::getAmountOrdered();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountPaid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountPaid');
        return $pluginInfo ? $this->___callPlugins('getAmountPaid', func_get_args(), $pluginInfo) : parent::getAmountPaid();
    }

    /**
     * {@inheritdoc}
     */
    public function getAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getAmountRefunded', func_get_args(), $pluginInfo) : parent::getAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getAnetTransMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAnetTransMethod');
        return $pluginInfo ? $this->___callPlugins('getAnetTransMethod', func_get_args(), $pluginInfo) : parent::getAnetTransMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountAuthorized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountAuthorized');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountAuthorized', func_get_args(), $pluginInfo) : parent::getBaseAmountAuthorized();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountCanceled()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountCanceled');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountCanceled', func_get_args(), $pluginInfo) : parent::getBaseAmountCanceled();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountOrdered()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountOrdered');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountOrdered', func_get_args(), $pluginInfo) : parent::getBaseAmountOrdered();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountPaid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountPaid');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountPaid', func_get_args(), $pluginInfo) : parent::getBaseAmountPaid();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountPaidOnline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountPaidOnline');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountPaidOnline', func_get_args(), $pluginInfo) : parent::getBaseAmountPaidOnline();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountRefunded', func_get_args(), $pluginInfo) : parent::getBaseAmountRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseAmountRefundedOnline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseAmountRefundedOnline');
        return $pluginInfo ? $this->___callPlugins('getBaseAmountRefundedOnline', func_get_args(), $pluginInfo) : parent::getBaseAmountRefundedOnline();
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
    public function getBaseShippingCaptured()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingCaptured');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingCaptured', func_get_args(), $pluginInfo) : parent::getBaseShippingCaptured();
    }

    /**
     * {@inheritdoc}
     */
    public function getBaseShippingRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBaseShippingRefunded');
        return $pluginInfo ? $this->___callPlugins('getBaseShippingRefunded', func_get_args(), $pluginInfo) : parent::getBaseShippingRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcApproval()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcApproval');
        return $pluginInfo ? $this->___callPlugins('getCcApproval', func_get_args(), $pluginInfo) : parent::getCcApproval();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcAvsStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcAvsStatus');
        return $pluginInfo ? $this->___callPlugins('getCcAvsStatus', func_get_args(), $pluginInfo) : parent::getCcAvsStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcCidStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcCidStatus');
        return $pluginInfo ? $this->___callPlugins('getCcCidStatus', func_get_args(), $pluginInfo) : parent::getCcCidStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugRequestBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugRequestBody');
        return $pluginInfo ? $this->___callPlugins('getCcDebugRequestBody', func_get_args(), $pluginInfo) : parent::getCcDebugRequestBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugResponseBody()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugResponseBody');
        return $pluginInfo ? $this->___callPlugins('getCcDebugResponseBody', func_get_args(), $pluginInfo) : parent::getCcDebugResponseBody();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcDebugResponseSerialized()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcDebugResponseSerialized');
        return $pluginInfo ? $this->___callPlugins('getCcDebugResponseSerialized', func_get_args(), $pluginInfo) : parent::getCcDebugResponseSerialized();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcExpMonth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcExpMonth');
        return $pluginInfo ? $this->___callPlugins('getCcExpMonth', func_get_args(), $pluginInfo) : parent::getCcExpMonth();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcExpYear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcExpYear');
        return $pluginInfo ? $this->___callPlugins('getCcExpYear', func_get_args(), $pluginInfo) : parent::getCcExpYear();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcLast4()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcLast4');
        return $pluginInfo ? $this->___callPlugins('getCcLast4', func_get_args(), $pluginInfo) : parent::getCcLast4();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcNumberEnc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcNumberEnc');
        return $pluginInfo ? $this->___callPlugins('getCcNumberEnc', func_get_args(), $pluginInfo) : parent::getCcNumberEnc();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcOwner()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcOwner');
        return $pluginInfo ? $this->___callPlugins('getCcOwner', func_get_args(), $pluginInfo) : parent::getCcOwner();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSecureVerify()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSecureVerify');
        return $pluginInfo ? $this->___callPlugins('getCcSecureVerify', func_get_args(), $pluginInfo) : parent::getCcSecureVerify();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsIssue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsIssue');
        return $pluginInfo ? $this->___callPlugins('getCcSsIssue', func_get_args(), $pluginInfo) : parent::getCcSsIssue();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsStartMonth()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsStartMonth');
        return $pluginInfo ? $this->___callPlugins('getCcSsStartMonth', func_get_args(), $pluginInfo) : parent::getCcSsStartMonth();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcSsStartYear()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcSsStartYear');
        return $pluginInfo ? $this->___callPlugins('getCcSsStartYear', func_get_args(), $pluginInfo) : parent::getCcSsStartYear();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcStatus()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcStatus');
        return $pluginInfo ? $this->___callPlugins('getCcStatus', func_get_args(), $pluginInfo) : parent::getCcStatus();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcStatusDescription()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcStatusDescription');
        return $pluginInfo ? $this->___callPlugins('getCcStatusDescription', func_get_args(), $pluginInfo) : parent::getCcStatusDescription();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcTransId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcTransId');
        return $pluginInfo ? $this->___callPlugins('getCcTransId', func_get_args(), $pluginInfo) : parent::getCcTransId();
    }

    /**
     * {@inheritdoc}
     */
    public function getCcType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCcType');
        return $pluginInfo ? $this->___callPlugins('getCcType', func_get_args(), $pluginInfo) : parent::getCcType();
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckAccountName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckAccountName');
        return $pluginInfo ? $this->___callPlugins('getEcheckAccountName', func_get_args(), $pluginInfo) : parent::getEcheckAccountName();
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckAccountType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckAccountType');
        return $pluginInfo ? $this->___callPlugins('getEcheckAccountType', func_get_args(), $pluginInfo) : parent::getEcheckAccountType();
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckBankName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckBankName');
        return $pluginInfo ? $this->___callPlugins('getEcheckBankName', func_get_args(), $pluginInfo) : parent::getEcheckBankName();
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckRoutingNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckRoutingNumber');
        return $pluginInfo ? $this->___callPlugins('getEcheckRoutingNumber', func_get_args(), $pluginInfo) : parent::getEcheckRoutingNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getEcheckType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEcheckType');
        return $pluginInfo ? $this->___callPlugins('getEcheckType', func_get_args(), $pluginInfo) : parent::getEcheckType();
    }

    /**
     * {@inheritdoc}
     */
    public function getLastTransId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLastTransId');
        return $pluginInfo ? $this->___callPlugins('getLastTransId', func_get_args(), $pluginInfo) : parent::getLastTransId();
    }

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethod');
        return $pluginInfo ? $this->___callPlugins('getMethod', func_get_args(), $pluginInfo) : parent::getMethod();
    }

    /**
     * {@inheritdoc}
     */
    public function getParentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParentId');
        return $pluginInfo ? $this->___callPlugins('getParentId', func_get_args(), $pluginInfo) : parent::getParentId();
    }

    /**
     * {@inheritdoc}
     */
    public function getPoNumber()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPoNumber');
        return $pluginInfo ? $this->___callPlugins('getPoNumber', func_get_args(), $pluginInfo) : parent::getPoNumber();
    }

    /**
     * {@inheritdoc}
     */
    public function getProtectionEligibility()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProtectionEligibility');
        return $pluginInfo ? $this->___callPlugins('getProtectionEligibility', func_get_args(), $pluginInfo) : parent::getProtectionEligibility();
    }

    /**
     * {@inheritdoc}
     */
    public function getQuotePaymentId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQuotePaymentId');
        return $pluginInfo ? $this->___callPlugins('getQuotePaymentId', func_get_args(), $pluginInfo) : parent::getQuotePaymentId();
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
    public function getShippingCaptured()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingCaptured');
        return $pluginInfo ? $this->___callPlugins('getShippingCaptured', func_get_args(), $pluginInfo) : parent::getShippingCaptured();
    }

    /**
     * {@inheritdoc}
     */
    public function getShippingRefunded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShippingRefunded');
        return $pluginInfo ? $this->___callPlugins('getShippingRefunded', func_get_args(), $pluginInfo) : parent::getShippingRefunded();
    }

    /**
     * {@inheritdoc}
     */
    public function setParentId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParentId');
        return $pluginInfo ? $this->___callPlugins('setParentId', func_get_args(), $pluginInfo) : parent::setParentId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingCaptured($baseShippingCaptured)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingCaptured');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingCaptured', func_get_args(), $pluginInfo) : parent::setBaseShippingCaptured($baseShippingCaptured);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingCaptured($shippingCaptured)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingCaptured');
        return $pluginInfo ? $this->___callPlugins('setShippingCaptured', func_get_args(), $pluginInfo) : parent::setShippingCaptured($shippingCaptured);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountRefunded($amountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setAmountRefunded', func_get_args(), $pluginInfo) : parent::setAmountRefunded($amountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountPaid($baseAmountPaid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountPaid');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountPaid', func_get_args(), $pluginInfo) : parent::setBaseAmountPaid($baseAmountPaid);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountCanceled($amountCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountCanceled');
        return $pluginInfo ? $this->___callPlugins('setAmountCanceled', func_get_args(), $pluginInfo) : parent::setAmountCanceled($amountCanceled);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountAuthorized($baseAmountAuthorized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountAuthorized');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountAuthorized', func_get_args(), $pluginInfo) : parent::setBaseAmountAuthorized($baseAmountAuthorized);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountPaidOnline($baseAmountPaidOnline)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountPaidOnline');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountPaidOnline', func_get_args(), $pluginInfo) : parent::setBaseAmountPaidOnline($baseAmountPaidOnline);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountRefundedOnline($baseAmountRefundedOnline)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountRefundedOnline');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountRefundedOnline', func_get_args(), $pluginInfo) : parent::setBaseAmountRefundedOnline($baseAmountRefundedOnline);
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
    public function setShippingAmount($amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAmount');
        return $pluginInfo ? $this->___callPlugins('setShippingAmount', func_get_args(), $pluginInfo) : parent::setShippingAmount($amount);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountPaid($amountPaid)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountPaid');
        return $pluginInfo ? $this->___callPlugins('setAmountPaid', func_get_args(), $pluginInfo) : parent::setAmountPaid($amountPaid);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountAuthorized($amountAuthorized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountAuthorized');
        return $pluginInfo ? $this->___callPlugins('setAmountAuthorized', func_get_args(), $pluginInfo) : parent::setAmountAuthorized($amountAuthorized);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountOrdered($baseAmountOrdered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountOrdered');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountOrdered', func_get_args(), $pluginInfo) : parent::setBaseAmountOrdered($baseAmountOrdered);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseShippingRefunded($baseShippingRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseShippingRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseShippingRefunded', func_get_args(), $pluginInfo) : parent::setBaseShippingRefunded($baseShippingRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingRefunded($shippingRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingRefunded');
        return $pluginInfo ? $this->___callPlugins('setShippingRefunded', func_get_args(), $pluginInfo) : parent::setShippingRefunded($shippingRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountRefunded($baseAmountRefunded)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountRefunded');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountRefunded', func_get_args(), $pluginInfo) : parent::setBaseAmountRefunded($baseAmountRefunded);
    }

    /**
     * {@inheritdoc}
     */
    public function setAmountOrdered($amountOrdered)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAmountOrdered');
        return $pluginInfo ? $this->___callPlugins('setAmountOrdered', func_get_args(), $pluginInfo) : parent::setAmountOrdered($amountOrdered);
    }

    /**
     * {@inheritdoc}
     */
    public function setBaseAmountCanceled($baseAmountCanceled)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBaseAmountCanceled');
        return $pluginInfo ? $this->___callPlugins('setBaseAmountCanceled', func_get_args(), $pluginInfo) : parent::setBaseAmountCanceled($baseAmountCanceled);
    }

    /**
     * {@inheritdoc}
     */
    public function setQuotePaymentId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQuotePaymentId');
        return $pluginInfo ? $this->___callPlugins('setQuotePaymentId', func_get_args(), $pluginInfo) : parent::setQuotePaymentId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalData($additionalData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalData');
        return $pluginInfo ? $this->___callPlugins('setAdditionalData', func_get_args(), $pluginInfo) : parent::setAdditionalData($additionalData);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcExpMonth($ccExpMonth)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcExpMonth');
        return $pluginInfo ? $this->___callPlugins('setCcExpMonth', func_get_args(), $pluginInfo) : parent::setCcExpMonth($ccExpMonth);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsStartYear($ccSsStartYear)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsStartYear');
        return $pluginInfo ? $this->___callPlugins('setCcSsStartYear', func_get_args(), $pluginInfo) : parent::setCcSsStartYear($ccSsStartYear);
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckBankName($echeckBankName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckBankName');
        return $pluginInfo ? $this->___callPlugins('setEcheckBankName', func_get_args(), $pluginInfo) : parent::setEcheckBankName($echeckBankName);
    }

    /**
     * {@inheritdoc}
     */
    public function setMethod($method)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMethod');
        return $pluginInfo ? $this->___callPlugins('setMethod', func_get_args(), $pluginInfo) : parent::setMethod($method);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugRequestBody($ccDebugRequestBody)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugRequestBody');
        return $pluginInfo ? $this->___callPlugins('setCcDebugRequestBody', func_get_args(), $pluginInfo) : parent::setCcDebugRequestBody($ccDebugRequestBody);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSecureVerify($ccSecureVerify)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSecureVerify');
        return $pluginInfo ? $this->___callPlugins('setCcSecureVerify', func_get_args(), $pluginInfo) : parent::setCcSecureVerify($ccSecureVerify);
    }

    /**
     * {@inheritdoc}
     */
    public function setProtectionEligibility($protectionEligibility)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProtectionEligibility');
        return $pluginInfo ? $this->___callPlugins('setProtectionEligibility', func_get_args(), $pluginInfo) : parent::setProtectionEligibility($protectionEligibility);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcApproval($ccApproval)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcApproval');
        return $pluginInfo ? $this->___callPlugins('setCcApproval', func_get_args(), $pluginInfo) : parent::setCcApproval($ccApproval);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcLast4($ccLast4)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcLast4');
        return $pluginInfo ? $this->___callPlugins('setCcLast4', func_get_args(), $pluginInfo) : parent::setCcLast4($ccLast4);
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
    public function setCcStatusDescription($description)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcStatusDescription');
        return $pluginInfo ? $this->___callPlugins('setCcStatusDescription', func_get_args(), $pluginInfo) : parent::setCcStatusDescription($description);
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckType($echeckType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckType');
        return $pluginInfo ? $this->___callPlugins('setEcheckType', func_get_args(), $pluginInfo) : parent::setEcheckType($echeckType);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugResponseSerialized($ccDebugResponseSerialized)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugResponseSerialized');
        return $pluginInfo ? $this->___callPlugins('setCcDebugResponseSerialized', func_get_args(), $pluginInfo) : parent::setCcDebugResponseSerialized($ccDebugResponseSerialized);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsStartMonth($ccSsStartMonth)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsStartMonth');
        return $pluginInfo ? $this->___callPlugins('setCcSsStartMonth', func_get_args(), $pluginInfo) : parent::setCcSsStartMonth($ccSsStartMonth);
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckAccountType($echeckAccountType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckAccountType');
        return $pluginInfo ? $this->___callPlugins('setEcheckAccountType', func_get_args(), $pluginInfo) : parent::setEcheckAccountType($echeckAccountType);
    }

    /**
     * {@inheritdoc}
     */
    public function setLastTransId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLastTransId');
        return $pluginInfo ? $this->___callPlugins('setLastTransId', func_get_args(), $pluginInfo) : parent::setLastTransId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcCidStatus($ccCidStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcCidStatus');
        return $pluginInfo ? $this->___callPlugins('setCcCidStatus', func_get_args(), $pluginInfo) : parent::setCcCidStatus($ccCidStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcOwner($ccOwner)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcOwner');
        return $pluginInfo ? $this->___callPlugins('setCcOwner', func_get_args(), $pluginInfo) : parent::setCcOwner($ccOwner);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcType($ccType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcType');
        return $pluginInfo ? $this->___callPlugins('setCcType', func_get_args(), $pluginInfo) : parent::setCcType($ccType);
    }

    /**
     * {@inheritdoc}
     */
    public function setPoNumber($poNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setPoNumber');
        return $pluginInfo ? $this->___callPlugins('setPoNumber', func_get_args(), $pluginInfo) : parent::setPoNumber($poNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcExpYear($ccExpYear)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcExpYear');
        return $pluginInfo ? $this->___callPlugins('setCcExpYear', func_get_args(), $pluginInfo) : parent::setCcExpYear($ccExpYear);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcStatus($ccStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcStatus');
        return $pluginInfo ? $this->___callPlugins('setCcStatus', func_get_args(), $pluginInfo) : parent::setCcStatus($ccStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckRoutingNumber($echeckRoutingNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckRoutingNumber');
        return $pluginInfo ? $this->___callPlugins('setEcheckRoutingNumber', func_get_args(), $pluginInfo) : parent::setEcheckRoutingNumber($echeckRoutingNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function setAccountStatus($accountStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAccountStatus');
        return $pluginInfo ? $this->___callPlugins('setAccountStatus', func_get_args(), $pluginInfo) : parent::setAccountStatus($accountStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function setAnetTransMethod($anetTransMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAnetTransMethod');
        return $pluginInfo ? $this->___callPlugins('setAnetTransMethod', func_get_args(), $pluginInfo) : parent::setAnetTransMethod($anetTransMethod);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcDebugResponseBody($ccDebugResponseBody)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcDebugResponseBody');
        return $pluginInfo ? $this->___callPlugins('setCcDebugResponseBody', func_get_args(), $pluginInfo) : parent::setCcDebugResponseBody($ccDebugResponseBody);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcSsIssue($ccSsIssue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcSsIssue');
        return $pluginInfo ? $this->___callPlugins('setCcSsIssue', func_get_args(), $pluginInfo) : parent::setCcSsIssue($ccSsIssue);
    }

    /**
     * {@inheritdoc}
     */
    public function setEcheckAccountName($echeckAccountName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEcheckAccountName');
        return $pluginInfo ? $this->___callPlugins('setEcheckAccountName', func_get_args(), $pluginInfo) : parent::setEcheckAccountName($echeckAccountName);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcAvsStatus($ccAvsStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcAvsStatus');
        return $pluginInfo ? $this->___callPlugins('setCcAvsStatus', func_get_args(), $pluginInfo) : parent::setCcAvsStatus($ccAvsStatus);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcNumberEnc($ccNumberEnc)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcNumberEnc');
        return $pluginInfo ? $this->___callPlugins('setCcNumberEnc', func_get_args(), $pluginInfo) : parent::setCcNumberEnc($ccNumberEnc);
    }

    /**
     * {@inheritdoc}
     */
    public function setCcTransId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCcTransId');
        return $pluginInfo ? $this->___callPlugins('setCcTransId', func_get_args(), $pluginInfo) : parent::setCcTransId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function setAddressStatus($addressStatus)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAddressStatus');
        return $pluginInfo ? $this->___callPlugins('setAddressStatus', func_get_args(), $pluginInfo) : parent::setAddressStatus($addressStatus);
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
    public function setExtensionAttributes(\Magento\Sales\Api\Data\OrderPaymentExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsTransactionPending($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsTransactionPending');
        return $pluginInfo ? $this->___callPlugins('setIsTransactionPending', func_get_args(), $pluginInfo) : parent::setIsTransactionPending($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsTransactionPending()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsTransactionPending');
        return $pluginInfo ? $this->___callPlugins('getIsTransactionPending', func_get_args(), $pluginInfo) : parent::getIsTransactionPending();
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFraudDetected($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsFraudDetected');
        return $pluginInfo ? $this->___callPlugins('setIsFraudDetected', func_get_args(), $pluginInfo) : parent::setIsFraudDetected($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFraudDetected()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsFraudDetected');
        return $pluginInfo ? $this->___callPlugins('getIsFraudDetected', func_get_args(), $pluginInfo) : parent::getIsFraudDetected();
    }

    /**
     * {@inheritdoc}
     */
    public function setShouldCloseParentTransaction($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShouldCloseParentTransaction');
        return $pluginInfo ? $this->___callPlugins('setShouldCloseParentTransaction', func_get_args(), $pluginInfo) : parent::setShouldCloseParentTransaction($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function getShouldCloseParentTransaction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShouldCloseParentTransaction');
        return $pluginInfo ? $this->___callPlugins('getShouldCloseParentTransaction', func_get_args(), $pluginInfo) : parent::getShouldCloseParentTransaction();
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
    public function getMethodInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMethodInstance');
        return $pluginInfo ? $this->___callPlugins('getMethodInstance', func_get_args(), $pluginInfo) : parent::getMethodInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function encrypt($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'encrypt');
        return $pluginInfo ? $this->___callPlugins('encrypt', func_get_args(), $pluginInfo) : parent::encrypt($data);
    }

    /**
     * {@inheritdoc}
     */
    public function decrypt($data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'decrypt');
        return $pluginInfo ? $this->___callPlugins('decrypt', func_get_args(), $pluginInfo) : parent::decrypt($data);
    }

    /**
     * {@inheritdoc}
     */
    public function setAdditionalInformation($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdditionalInformation');
        return $pluginInfo ? $this->___callPlugins('setAdditionalInformation', func_get_args(), $pluginInfo) : parent::setAdditionalInformation($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function getAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdditionalInformation');
        return $pluginInfo ? $this->___callPlugins('getAdditionalInformation', func_get_args(), $pluginInfo) : parent::getAdditionalInformation($key);
    }

    /**
     * {@inheritdoc}
     */
    public function unsAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsAdditionalInformation');
        return $pluginInfo ? $this->___callPlugins('unsAdditionalInformation', func_get_args(), $pluginInfo) : parent::unsAdditionalInformation($key);
    }

    /**
     * {@inheritdoc}
     */
    public function hasAdditionalInformation($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAdditionalInformation');
        return $pluginInfo ? $this->___callPlugins('hasAdditionalInformation', func_get_args(), $pluginInfo) : parent::hasAdditionalInformation($key);
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
