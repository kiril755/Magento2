<?php
namespace Magento\Analytics\Controller\Adminhtml\Subscription\Retry;

/**
 * Interceptor class for @see \Magento\Analytics\Controller\Adminhtml\Subscription\Retry
 */
class Interceptor extends \Magento\Analytics\Controller\Adminhtml\Subscription\Retry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Analytics\Model\Config\Backend\Enabled\SubscriptionHandler $subscriptionHandler)
    {
        $this->___init();
        parent::__construct($context, $subscriptionHandler);
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
