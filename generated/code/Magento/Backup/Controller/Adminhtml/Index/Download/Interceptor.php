<?php
namespace Magento\Backup\Controller\Adminhtml\Index\Download;

/**
 * Interceptor class for @see \Magento\Backup\Controller\Adminhtml\Index\Download
 */
class Interceptor extends \Magento\Backup\Controller\Adminhtml\Index\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\Backup\Factory $backupFactory, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Backup\Model\BackupFactory $backupModelFactory, \Magento\Framework\App\MaintenanceMode $maintenanceMode, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $backupFactory, $fileFactory, $backupModelFactory, $maintenanceMode, $resultRawFactory);
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
