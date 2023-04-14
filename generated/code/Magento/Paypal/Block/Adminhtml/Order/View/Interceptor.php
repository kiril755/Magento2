<?php
namespace Magento\Paypal\Block\Adminhtml\Order\View;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Adminhtml\Order\View
 */
class Interceptor extends \Magento\Paypal\Block\Adminhtml\Order\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Model\Config $salesConfig, \Magento\Sales\Helper\Reorder $reorderHelper, \Magento\Paypal\Model\Adminhtml\Express $express, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $salesConfig, $reorderHelper, $express, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addButton($buttonId, $data, $level = 0, $sortOrder = 0, $region = 'toolbar')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addButton');
        return $pluginInfo ? $this->___callPlugins('addButton', func_get_args(), $pluginInfo) : parent::addButton($buttonId, $data, $level, $sortOrder, $region);
    }
}
