<?php
namespace PayPal\Braintree\Controller\Webhook\FraudProtection;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Webhook\FraudProtection
 */
class Interceptor extends \PayPal\Braintree\Controller\Webhook\FraudProtection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \PayPal\Braintree\Model\Webhook\Config $webhookConfig, \Psr\Log\LoggerInterface $logger, \Magento\Framework\App\Request\Http $httpRequest, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $braintreeAdapter, \Magento\Sales\Api\TransactionRepositoryInterface $transactionRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Api\OrderPaymentRepositoryInterface $orderPaymentRepository, \Magento\Sales\Api\OrderManagementInterface $orderManagement)
    {
        $this->___init();
        parent::__construct($context, $webhookConfig, $logger, $httpRequest, $braintreeAdapter, $transactionRepository, $searchCriteriaBuilder, $orderRepository, $orderPaymentRepository, $orderManagement);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : ?\Magento\Framework\Controller\ResultInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
