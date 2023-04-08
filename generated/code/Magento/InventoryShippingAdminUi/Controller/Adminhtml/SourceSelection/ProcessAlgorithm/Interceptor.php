<?php
namespace Magento\InventoryShippingAdminUi\Controller\Adminhtml\SourceSelection\ProcessAlgorithm;

/**
 * Interceptor class for @see \Magento\InventoryShippingAdminUi\Controller\Adminhtml\SourceSelection\ProcessAlgorithm
 */
class Interceptor extends \Magento\InventoryShippingAdminUi\Controller\Adminhtml\SourceSelection\ProcessAlgorithm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, $stockByWebsiteIdResolver, \Magento\InventorySourceSelectionApi\Api\Data\ItemRequestInterfaceFactory $itemRequestFactory, $inventoryRequestFactory, \Magento\InventorySourceSelectionApi\Api\SourceSelectionServiceInterface $sourceSelectionService, \Magento\InventorySourceSelectionApi\Api\GetDefaultSourceSelectionAlgorithmCodeInterface $getDefaultSourceSelectionAlgorithmCode, \Magento\InventoryApi\Api\SourceRepositoryInterface $sourceRepository, ?\Magento\InventorySourceSelectionApi\Model\GetInventoryRequestFromOrder $getInventoryRequestFromOrder = null)
    {
        $this->___init();
        parent::__construct($context, $stockByWebsiteIdResolver, $itemRequestFactory, $inventoryRequestFactory, $sourceSelectionService, $getDefaultSourceSelectionAlgorithmCode, $sourceRepository, $getInventoryRequestFromOrder);
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
