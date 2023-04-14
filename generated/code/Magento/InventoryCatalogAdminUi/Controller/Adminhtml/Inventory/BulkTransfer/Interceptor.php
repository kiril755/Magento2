<?php
namespace Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Inventory\BulkTransfer;

/**
 * Interceptor class for @see \Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Inventory\BulkTransfer
 */
class Interceptor extends \Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Inventory\BulkTransfer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Bulk\BulkPageProcessor $processBulkPage)
    {
        $this->___init();
        parent::__construct($context, $processBulkPage);
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
