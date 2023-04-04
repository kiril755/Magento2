<?php
namespace Magento\InventoryInStorePickupSalesAdminUi\Controller\Adminhtml\Order\NotifyPickup;

/**
 * Interceptor class for @see \Magento\InventoryInStorePickupSalesAdminUi\Controller\Adminhtml\Order\NotifyPickup
 */
class Interceptor extends \Magento\InventoryInStorePickupSalesAdminUi\Controller\Adminhtml\Order\NotifyPickup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\InventoryInStorePickupSalesApi\Api\NotifyOrdersAreReadyForPickupInterface $notifyOrdersAreReadyForPickup, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $notifyOrdersAreReadyForPickup, $orderRepository, $logger);
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
