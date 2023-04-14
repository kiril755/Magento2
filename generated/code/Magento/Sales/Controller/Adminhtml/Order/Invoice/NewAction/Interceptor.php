<?php
namespace Magento\Sales\Controller\Adminhtml\Order\Invoice\NewAction;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Order\Invoice\NewAction
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Order\Invoice\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Sales\Model\Service\InvoiceService $invoiceService, ?\Magento\Sales\Api\OrderRepositoryInterface $orderRepository = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $resultPageFactory, $invoiceService, $orderRepository);
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
