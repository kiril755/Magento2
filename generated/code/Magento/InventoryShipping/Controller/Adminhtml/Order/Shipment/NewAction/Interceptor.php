<?php
namespace Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction;

/**
 * Interceptor class for @see \Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction
 */
class Interceptor extends \Magento\InventoryShipping\Controller\Adminhtml\Order\Shipment\NewAction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader $shipmentLoader, ?\Magento\Shipping\Model\ShipmentProviderInterface $shipmentProvider = null)
    {
        $this->___init();
        parent::__construct($context, $shipmentLoader, $shipmentProvider);
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
