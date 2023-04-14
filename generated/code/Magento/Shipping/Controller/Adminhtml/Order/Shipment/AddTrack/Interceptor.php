<?php
namespace Magento\Shipping\Controller\Adminhtml\Order\Shipment\AddTrack;

/**
 * Interceptor class for @see \Magento\Shipping\Controller\Adminhtml\Order\Shipment\AddTrack
 */
class Interceptor extends \Magento\Shipping\Controller\Adminhtml\Order\Shipment\AddTrack implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Shipping\Controller\Adminhtml\Order\ShipmentLoader $shipmentLoader, ?\Magento\Sales\Api\ShipmentRepositoryInterface $shipmentRepository = null, ?\Magento\Sales\Api\Data\ShipmentTrackInterfaceFactory $trackFactory = null, ?\Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $shipmentLoader, $shipmentRepository, $trackFactory, $serializer);
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
