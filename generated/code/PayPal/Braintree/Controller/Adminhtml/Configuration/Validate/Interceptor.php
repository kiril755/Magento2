<?php
namespace PayPal\Braintree\Controller\Adminhtml\Configuration\Validate;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Adminhtml\Configuration\Validate
 */
class Interceptor extends \PayPal\Braintree\Controller\Adminhtml\Configuration\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \PayPal\Braintree\Gateway\Config\Config $config)
    {
        $this->___init();
        parent::__construct($context, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
