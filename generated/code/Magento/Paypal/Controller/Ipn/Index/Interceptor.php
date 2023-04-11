<?php
namespace Magento\Paypal\Controller\Ipn\Index;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Ipn\Index
 */
class Interceptor extends \Magento\Paypal\Controller\Ipn\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Paypal\Model\IpnFactory $ipnFactory, \Psr\Log\LoggerInterface $logger, ?\Magento\Sales\Model\OrderFactory $orderFactory = null)
    {
        $this->___init();
        parent::__construct($context, $ipnFactory, $logger, $orderFactory);
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
