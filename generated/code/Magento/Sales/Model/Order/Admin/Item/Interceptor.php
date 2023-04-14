<?php
namespace Magento\Sales\Model\Order\Admin\Item;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\Admin\Item
 */
class Interceptor extends \Magento\Sales\Model\Order\Admin\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getSku(\Magento\Sales\Model\Order\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSku');
        return $pluginInfo ? $this->___callPlugins('getSku', func_get_args(), $pluginInfo) : parent::getSku($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(\Magento\Sales\Model\Order\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName($item);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductId(\Magento\Sales\Model\Order\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductId');
        return $pluginInfo ? $this->___callPlugins('getProductId', func_get_args(), $pluginInfo) : parent::getProductId($item);
    }
}
