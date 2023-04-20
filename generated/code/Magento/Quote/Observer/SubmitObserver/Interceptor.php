<?php
namespace Magento\Quote\Observer\SubmitObserver;

/**
 * Interceptor class for @see \Magento\Quote\Observer\SubmitObserver
 */
class Interceptor extends \Magento\Quote\Observer\SubmitObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Sales\Model\Order\Email\Sender\OrderSender $orderSender)
    {
        $this->___init();
        parent::__construct($logger, $orderSender);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
