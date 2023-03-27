<?php
namespace Magento\Sales\Block\Adminhtml\Order\Invoice\Create\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Invoice\Create\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Invoice\Create\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, array $data = [], ?\Magento\Tax\Helper\Data $taxHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $data, $taxHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function canCreateShipment()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canCreateShipment');
        return $pluginInfo ? $this->___callPlugins('canCreateShipment', func_get_args(), $pluginInfo) : parent::canCreateShipment();
    }
}
