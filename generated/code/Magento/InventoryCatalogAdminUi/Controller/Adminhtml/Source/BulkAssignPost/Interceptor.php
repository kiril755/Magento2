<?php
namespace Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Source\BulkAssignPost;

/**
 * Interceptor class for @see \Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Source\BulkAssignPost
 */
class Interceptor extends \Magento\InventoryCatalogAdminUi\Controller\Adminhtml\Source\BulkAssignPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\InventoryCatalogApi\Api\BulkSourceAssignInterface $bulkSourceAssign, \Magento\InventoryCatalogAdminUi\Model\BulkSessionProductsStorage $bulkSessionProductsStorage, \Magento\InventoryCatalogAdminUi\Model\BulkOperationsConfig $bulkOperationsConfig, \Magento\AsynchronousOperations\Model\MassSchedule $massSchedule, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $bulkSourceAssign, $bulkSessionProductsStorage, $bulkOperationsConfig, $massSchedule, $logger);
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
