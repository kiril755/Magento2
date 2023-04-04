<?php
namespace Magento\Multishipping\Controller\Checkout\BackToAddresses;

/**
 * Interceptor class for @see \Magento\Multishipping\Controller\Checkout\BackToAddresses
 */
class Interceptor extends \Magento\Multishipping\Controller\Checkout\BackToAddresses implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $customerRepository, $accountManagement);
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
