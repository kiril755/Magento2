<?php
namespace Magento\Sales\Controller\Adminhtml\Order\Invoice\Cancel;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Order\Invoice\Cancel
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Order\Invoice\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, ?\Magento\Sales\Api\InvoiceRepositoryInterface $invoiceRepository = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $resultForwardFactory, $invoiceRepository);
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
