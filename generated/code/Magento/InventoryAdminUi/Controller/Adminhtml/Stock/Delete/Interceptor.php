<?php
namespace Magento\InventoryAdminUi\Controller\Adminhtml\Stock\Delete;

/**
 * Interceptor class for @see \Magento\InventoryAdminUi\Controller\Adminhtml\Stock\Delete
 */
class Interceptor extends \Magento\InventoryAdminUi\Controller\Adminhtml\Stock\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\InventoryApi\Api\StockRepositoryInterface $stockRepository)
    {
        $this->___init();
        parent::__construct($context, $stockRepository);
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
