<?php
namespace Magento\Sales\Controller\Adminhtml\Transactions\Index;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Transactions\Index
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Transactions\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Sales\Api\OrderPaymentRepositoryInterface $orderPaymentRepository)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $resultPageFactory, $resultLayoutFactory, $orderPaymentRepository);
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
