<?php
namespace Magento\Customer\Controller\Account\CreatePassword;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Account\CreatePassword
 */
class Interceptor extends \Magento\Customer\Controller\Account\CreatePassword implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Customer\Api\AccountManagementInterface $accountManagement, ?\Magento\Customer\Model\ForgotPasswordToken\ConfirmCustomerByToken $confirmByToken = null, ?\Magento\Customer\Model\ForgotPasswordToken\GetCustomerByToken $getByToken = null, ?\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $resultPageFactory, $accountManagement, $confirmByToken, $getByToken, $customerRepository);
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
