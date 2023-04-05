<?php
namespace Magento\Paypal\Model\Payflowadvanced;

/**
 * Interceptor class for @see \Magento\Paypal\Model\Payflowadvanced
 */
class Interceptor extends \Magento\Paypal\Model\Payflowadvanced implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Payment\Helper\Data $paymentData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Payment\Model\Method\Logger $logger, \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Payment\Model\Method\ConfigInterfaceFactory $configFactory, \Magento\Paypal\Model\Payflow\Service\Gateway $gateway, \Magento\Paypal\Model\Payflow\Service\Response\Handler\HandlerInterface $errorHandler, \Magento\Framework\Math\Random $mathRandom, \Magento\Paypal\Model\Payflow\RequestFactory $requestFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Framework\App\RequestInterface $requestHttp, \Magento\Store\Model\WebsiteFactory $websiteFactory, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $paymentData, $scopeConfig, $logger, $moduleList, $localeDate, $storeManager, $configFactory, $gateway, $errorHandler, $mathRandom, $requestFactory, $quoteRepository, $orderFactory, $requestHttp, $websiteFactory, $orderSender, $resource, $resourceCollection, $data);
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
    public function isAvailable(?\Magento\Quote\Api\Data\CartInterface $quote = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAvailable');
        return $pluginInfo ? $this->___callPlugins('isAvailable', func_get_args(), $pluginInfo) : parent::isAvailable($quote);
    }

    /**
     * {@inheritdoc}
     */
    public function isActive($storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isActive');
        return $pluginInfo ? $this->___callPlugins('isActive', func_get_args(), $pluginInfo) : parent::isActive($storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function initialize($paymentAction, $stateObject)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'initialize');
        return $pluginInfo ? $this->___callPlugins('initialize', func_get_args(), $pluginInfo) : parent::initialize($paymentAction, $stateObject);
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }

    /**
     * {@inheritdoc}
     */
    public function process($responseData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($responseData);
    }

    /**
     * {@inheritdoc}
     */
    public function buildBasicRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'buildBasicRequest');
        return $pluginInfo ? $this->___callPlugins('buildBasicRequest', func_get_args(), $pluginInfo) : parent::buildBasicRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigPaymentAction()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigPaymentAction');
        return $pluginInfo ? $this->___callPlugins('getConfigPaymentAction', func_get_args(), $pluginInfo) : parent::getConfigPaymentAction();
    }

    /**
     * {@inheritdoc}
     */
    public function authorize(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'authorize');
        return $pluginInfo ? $this->___callPlugins('authorize', func_get_args(), $pluginInfo) : parent::authorize($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function capture(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'capture');
        return $pluginInfo ? $this->___callPlugins('capture', func_get_args(), $pluginInfo) : parent::capture($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function void(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'void');
        return $pluginInfo ? $this->___callPlugins('void', func_get_args(), $pluginInfo) : parent::void($payment);
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
    public function cancel(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        return $pluginInfo ? $this->___callPlugins('cancel', func_get_args(), $pluginInfo) : parent::cancel($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function refund(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'refund');
        return $pluginInfo ? $this->___callPlugins('refund', func_get_args(), $pluginInfo) : parent::refund($payment, $amount);
    }

    /**
     * {@inheritdoc}
     */
    public function fetchTransactionInfo(\Magento\Payment\Model\InfoInterface $payment, $transactionId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetchTransactionInfo');
        return $pluginInfo ? $this->___callPlugins('fetchTransactionInfo', func_get_args(), $pluginInfo) : parent::fetchTransactionInfo($payment, $transactionId);
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
    public function postRequest(\Magento\Framework\DataObject $request, \Magento\Payment\Model\Method\ConfigInterface $config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'postRequest');
        return $pluginInfo ? $this->___callPlugins('postRequest', func_get_args(), $pluginInfo) : parent::postRequest($request, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function processErrors(\Magento\Framework\DataObject $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processErrors');
        return $pluginInfo ? $this->___callPlugins('processErrors', func_get_args(), $pluginInfo) : parent::processErrors($response);
    }

    /**
     * {@inheritdoc}
     */
    public function acceptPayment(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'acceptPayment');
        return $pluginInfo ? $this->___callPlugins('acceptPayment', func_get_args(), $pluginInfo) : parent::acceptPayment($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function denyPayment(\Magento\Payment\Model\InfoInterface $payment)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'denyPayment');
        return $pluginInfo ? $this->___callPlugins('denyPayment', func_get_args(), $pluginInfo) : parent::denyPayment($payment);
    }

    /**
     * {@inheritdoc}
     */
    public function reviewPayment(\Magento\Payment\Model\InfoInterface $payment, $action)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reviewPayment');
        return $pluginInfo ? $this->___callPlugins('reviewPayment', func_get_args(), $pluginInfo) : parent::reviewPayment($payment, $action);
    }

    /**
     * {@inheritdoc}
     */
    public function setBilling(\Magento\Framework\DataObject $request, $billing)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBilling');
        return $pluginInfo ? $this->___callPlugins('setBilling', func_get_args(), $pluginInfo) : parent::setBilling($request, $billing);
    }

    /**
     * {@inheritdoc}
     */
    public function setShipping($request, $shipping)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShipping');
        return $pluginInfo ? $this->___callPlugins('setShipping', func_get_args(), $pluginInfo) : parent::setShipping($request, $shipping);
    }

    /**
     * {@inheritdoc}
     */
    public function mapGatewayResponse(array $postData, \Magento\Framework\DataObject $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'mapGatewayResponse');
        return $pluginInfo ? $this->___callPlugins('mapGatewayResponse', func_get_args(), $pluginInfo) : parent::mapGatewayResponse($postData, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function setTransStatus($payment, $response)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTransStatus');
        return $pluginInfo ? $this->___callPlugins('setTransStatus', func_get_args(), $pluginInfo) : parent::setTransStatus($payment, $response);
    }

    /**
     * {@inheritdoc}
     */
    public function fillCustomerContacts(\Magento\Framework\DataObject $order, \Magento\Framework\DataObject $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fillCustomerContacts');
        return $pluginInfo ? $this->___callPlugins('fillCustomerContacts', func_get_args(), $pluginInfo) : parent::fillCustomerContacts($order, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function addRequestOrderInfo(\Magento\Framework\DataObject $request, \Magento\Sales\Model\Order $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRequestOrderInfo');
        return $pluginInfo ? $this->___callPlugins('addRequestOrderInfo', func_get_args(), $pluginInfo) : parent::addRequestOrderInfo($request, $order);
    }

    /**
     * {@inheritdoc}
     */
    public function assignData(\Magento\Framework\DataObject $data)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'assignData');
        return $pluginInfo ? $this->___callPlugins('assignData', func_get_args(), $pluginInfo) : parent::assignData($data);
    }

    /**
     * {@inheritdoc}
     */
    public function hasVerification()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasVerification');
        return $pluginInfo ? $this->___callPlugins('hasVerification', func_get_args(), $pluginInfo) : parent::hasVerification();
    }

    /**
     * {@inheritdoc}
     */
    public function getVerificationRegEx()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVerificationRegEx');
        return $pluginInfo ? $this->___callPlugins('getVerificationRegEx', func_get_args(), $pluginInfo) : parent::getVerificationRegEx();
    }

    /**
     * {@inheritdoc}
     */
    public function otherCcType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'otherCcType');
        return $pluginInfo ? $this->___callPlugins('otherCcType', func_get_args(), $pluginInfo) : parent::otherCcType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function validateCcNum($ccNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCcNum');
        return $pluginInfo ? $this->___callPlugins('validateCcNum', func_get_args(), $pluginInfo) : parent::validateCcNum($ccNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function validateCcNumOther($ccNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateCcNumOther');
        return $pluginInfo ? $this->___callPlugins('validateCcNumOther', func_get_args(), $pluginInfo) : parent::validateCcNumOther($ccNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function setStore($storeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStore');
        return $pluginInfo ? $this->___callPlugins('setStore', func_get_args(), $pluginInfo) : parent::setStore($storeId);
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
    public function canOrder()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canOrder');
        return $pluginInfo ? $this->___callPlugins('canOrder', func_get_args(), $pluginInfo) : parent::canOrder();
    }

    /**
     * {@inheritdoc}
     */
    public function canAuthorize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canAuthorize');
        return $pluginInfo ? $this->___callPlugins('canAuthorize', func_get_args(), $pluginInfo) : parent::canAuthorize();
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
    public function canCapturePartial()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCapturePartial');
        return $pluginInfo ? $this->___callPlugins('canCapturePartial', func_get_args(), $pluginInfo) : parent::canCapturePartial();
    }

    /**
     * {@inheritdoc}
     */
    public function canCaptureOnce()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCaptureOnce');
        return $pluginInfo ? $this->___callPlugins('canCaptureOnce', func_get_args(), $pluginInfo) : parent::canCaptureOnce();
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
    public function canUseInternal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseInternal');
        return $pluginInfo ? $this->___callPlugins('canUseInternal', func_get_args(), $pluginInfo) : parent::canUseInternal();
    }

    /**
     * {@inheritdoc}
     */
    public function canUseCheckout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseCheckout');
        return $pluginInfo ? $this->___callPlugins('canUseCheckout', func_get_args(), $pluginInfo) : parent::canUseCheckout();
    }

    /**
     * {@inheritdoc}
     */
    public function canEdit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canEdit');
        return $pluginInfo ? $this->___callPlugins('canEdit', func_get_args(), $pluginInfo) : parent::canEdit();
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
    public function isGateway()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isGateway');
        return $pluginInfo ? $this->___callPlugins('isGateway', func_get_args(), $pluginInfo) : parent::isGateway();
    }

    /**
     * {@inheritdoc}
     */
    public function isOffline()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isOffline');
        return $pluginInfo ? $this->___callPlugins('isOffline', func_get_args(), $pluginInfo) : parent::isOffline();
    }

    /**
     * {@inheritdoc}
     */
    public function isInitializeNeeded()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isInitializeNeeded');
        return $pluginInfo ? $this->___callPlugins('isInitializeNeeded', func_get_args(), $pluginInfo) : parent::isInitializeNeeded();
    }

    /**
     * {@inheritdoc}
     */
    public function canUseForCountry($country)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseForCountry');
        return $pluginInfo ? $this->___callPlugins('canUseForCountry', func_get_args(), $pluginInfo) : parent::canUseForCountry($country);
    }

    /**
     * {@inheritdoc}
     */
    public function canUseForCurrency($currencyCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canUseForCurrency');
        return $pluginInfo ? $this->___callPlugins('canUseForCurrency', func_get_args(), $pluginInfo) : parent::canUseForCurrency($currencyCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCode');
        return $pluginInfo ? $this->___callPlugins('getCode', func_get_args(), $pluginInfo) : parent::getCode();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormBlockType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormBlockType');
        return $pluginInfo ? $this->___callPlugins('getFormBlockType', func_get_args(), $pluginInfo) : parent::getFormBlockType();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoBlockType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoBlockType');
        return $pluginInfo ? $this->___callPlugins('getInfoBlockType', func_get_args(), $pluginInfo) : parent::getInfoBlockType();
    }

    /**
     * {@inheritdoc}
     */
    public function getInfoInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInfoInstance');
        return $pluginInfo ? $this->___callPlugins('getInfoInstance', func_get_args(), $pluginInfo) : parent::getInfoInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function setInfoInstance(\Magento\Payment\Model\InfoInterface $info)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setInfoInstance');
        return $pluginInfo ? $this->___callPlugins('setInfoInstance', func_get_args(), $pluginInfo) : parent::setInfoInstance($info);
    }

    /**
     * {@inheritdoc}
     */
    public function order(\Magento\Payment\Model\InfoInterface $payment, $amount)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'order');
        return $pluginInfo ? $this->___callPlugins('order', func_get_args(), $pluginInfo) : parent::order($payment, $amount);
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
    public function getTitle()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTitle');
        return $pluginInfo ? $this->___callPlugins('getTitle', func_get_args(), $pluginInfo) : parent::getTitle();
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigData($field, $storeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConfigData');
        return $pluginInfo ? $this->___callPlugins('getConfigData', func_get_args(), $pluginInfo) : parent::getConfigData($field, $storeId);
    }

    /**
     * {@inheritdoc}
     */
    public function getDebugFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDebugFlag');
        return $pluginInfo ? $this->___callPlugins('getDebugFlag', func_get_args(), $pluginInfo) : parent::getDebugFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function debugData($debugData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debugData');
        return $pluginInfo ? $this->___callPlugins('debugData', func_get_args(), $pluginInfo) : parent::debugData($debugData);
    }

    /**
     * {@inheritdoc}
     */
    public function getDebugReplacePrivateDataKeys()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDebugReplacePrivateDataKeys');
        return $pluginInfo ? $this->___callPlugins('getDebugReplacePrivateDataKeys', func_get_args(), $pluginInfo) : parent::getDebugReplacePrivateDataKeys();
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

    /**
     * {@inheritdoc}
     */
    public function formatPrice($price)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatPrice');
        return $pluginInfo ? $this->___callPlugins('formatPrice', func_get_args(), $pluginInfo) : parent::formatPrice($price);
    }
}
