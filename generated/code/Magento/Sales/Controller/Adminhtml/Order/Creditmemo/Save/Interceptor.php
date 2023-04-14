<?php
namespace Magento\Sales\Controller\Adminhtml\Order\Creditmemo\Save;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Order\Creditmemo\Save
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Order\Creditmemo\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sales\Controller\Adminhtml\Order\CreditmemoLoader $creditmemoLoader, \Magento\Sales\Model\Order\Email\Sender\CreditmemoSender $creditmemoSender, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, ?\Magento\Sales\Helper\Data $salesData = null)
    {
        $this->___init();
        parent::__construct($context, $creditmemoLoader, $creditmemoSender, $resultForwardFactory, $salesData);
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
