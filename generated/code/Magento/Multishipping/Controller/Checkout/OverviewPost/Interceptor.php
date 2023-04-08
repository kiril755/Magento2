<?php
namespace Magento\Multishipping\Controller\Checkout\OverviewPost;

/**
 * Interceptor class for @see \Magento\Multishipping\Controller\Checkout\OverviewPost
 */
class Interceptor extends \Magento\Multishipping\Controller\Checkout\OverviewPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Psr\Log\LoggerInterface $logger, \Magento\Checkout\Api\AgreementsValidatorInterface $agreementValidator, \Magento\Framework\Session\SessionManagerInterface $session, ?\Magento\Checkout\Api\PaymentProcessingRateLimiterInterface $paymentRateLimiter = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $customerRepository, $accountManagement, $formKeyValidator, $logger, $agreementValidator, $session, $paymentRateLimiter);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
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
