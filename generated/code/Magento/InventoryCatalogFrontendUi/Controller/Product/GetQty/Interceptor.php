<?php
namespace Magento\InventoryCatalogFrontendUi\Controller\Product\GetQty;

/**
 * Interceptor class for @see \Magento\InventoryCatalogFrontendUi\Controller\Product\GetQty
 */
class Interceptor extends \Magento\InventoryCatalogFrontendUi\Controller\Product\GetQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\ResultFactory $resultPageFactory, \Magento\InventoryCatalogFrontendUi\Model\GetProductQtyLeft $productQty, \Magento\InventorySalesApi\Api\StockResolverInterface $stockResolver)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $productQty, $stockResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
