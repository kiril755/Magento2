<?php
namespace Magento\InventoryLowQuantityNotificationAdminUi\Controller\Adminhtml\Report\ExportLowstockCsv;

/**
 * Interceptor class for @see \Magento\InventoryLowQuantityNotificationAdminUi\Controller\Adminhtml\Report\ExportLowstockCsv
 */
class Interceptor extends \Magento\InventoryLowQuantityNotificationAdminUi\Controller\Adminhtml\Report\ExportLowstockCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, ?\Magento\Backend\Helper\Data $backendHelperData = null)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $dateFilter, $timezone, $backendHelperData);
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
