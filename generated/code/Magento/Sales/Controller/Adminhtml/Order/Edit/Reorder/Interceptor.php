<?php
namespace Magento\Sales\Controller\Adminhtml\Order\Edit\Reorder;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Adminhtml\Order\Edit\Reorder
 */
class Interceptor extends \Magento\Sales\Controller\Adminhtml\Order\Edit\Reorder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\Escaper $escaper, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Backend\Model\View\Result\ForwardFactory $resultForwardFactory, \Magento\Sales\Model\Order\Reorder\UnavailableProductsProvider $unavailableProductsProvider, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Helper\Reorder $reorderHelper, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $productHelper, $escaper, $resultPageFactory, $resultForwardFactory, $unavailableProductsProvider, $orderRepository, $reorderHelper, $logger);
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
