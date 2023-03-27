<?php
namespace Magento\Checkout\Controller\Account\DelegateCreate;

/**
 * Interceptor class for @see \Magento\Checkout\Controller\Account\DelegateCreate
 */
class Interceptor extends \Magento\Checkout\Controller\Account\DelegateCreate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Sales\Api\OrderCustomerDelegateInterface $customerDelegation, \Magento\Checkout\Model\Session $session)
    {
        $this->___init();
        parent::__construct($context, $customerDelegation, $session);
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
