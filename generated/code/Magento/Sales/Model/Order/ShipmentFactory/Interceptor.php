<?php
namespace Magento\Sales\Model\Order\ShipmentFactory;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\ShipmentFactory
 */
class Interceptor extends \Magento\Sales\Model\Order\ShipmentFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Convert\OrderFactory $convertOrderFactory, \Magento\Sales\Model\Order\Shipment\TrackFactory $trackFactory, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($convertOrderFactory, $trackFactory, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function create(\Magento\Sales\Model\Order $order, array $items = [], $tracks = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'create');
        return $pluginInfo ? $this->___callPlugins('create', func_get_args(), $pluginInfo) : parent::create($order, $items, $tracks);
    }
}
