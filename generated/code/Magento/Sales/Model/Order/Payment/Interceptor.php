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
    public function accept()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'accept');
        return $pluginInfo ? $this->___callPlugins('accept', func_get_args(), $pluginInfo) : parent::accept();
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo) : parent::getExtensionAttributes();
    }
}
