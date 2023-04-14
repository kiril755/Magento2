<?php
namespace Magento\Paypal\Controller\Transparent\Redirect;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Transparent\Redirect
 */
class Interceptor extends \Magento\Paypal\Controller\Transparent\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Paypal\Model\Payflow\Transparent $transparent, \Magento\Payment\Model\Method\Logger $logger)
    {
        $this->___init();
        parent::__construct($context, $resultLayoutFactory, $transparent, $logger);
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
