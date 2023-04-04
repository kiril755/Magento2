<?php
namespace Magento\Sales\Controller\Adminhtml\Order\Edit\ConfigureProductToAdd;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Order\Edit\ConfigureProductToAdd
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Order\Edit\ConfigureProductToAdd implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\Escaper $escaper, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($context, $productHelper, $escaper, $resultPageFactory, $resultForwardFactory, $storeManager);
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
