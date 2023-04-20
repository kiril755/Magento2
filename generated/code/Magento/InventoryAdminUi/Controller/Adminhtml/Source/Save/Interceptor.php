<?php
namespace Magento\InventoryAdminUi\Controller\Adminhtml\Source\Save;

/**
 * Interceptor class for @see \Magento\InventoryAdminUi\Controller\Adminhtml\Source\Save
 */
class Interceptor extends \Magento\InventoryAdminUi\Controller\Adminhtml\Source\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\InventoryApi\Api\Data\SourceInterfaceFactory $sourceFactory, \Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, \Magento\InventoryAdminUi\Model\Source\SourceHydrator $sourceHydrator)
    {
        $this->___init();
        parent::__construct($context, $sourceFactory, $sourceRepository, $sourceHydrator);
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
