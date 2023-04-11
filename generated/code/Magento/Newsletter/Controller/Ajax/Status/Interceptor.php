<?php
namespace Magento\Newsletter\Controller\Ajax\Status;

/**
 * Interceptor class for @see \Magento\Newsletter\Controller\Ajax\Status
 */
class Interceptor extends \Magento\Newsletter\Controller\Ajax\Status implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Validator\EmailAddress $emailAddressValidator, \Magento\Newsletter\Model\GuestSubscriptionChecker $guestSubscriptionChecker, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $emailAddressValidator, $guestSubscriptionChecker, $logger);
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
