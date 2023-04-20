<?php
namespace Magento\Shipping\Block\Adminhtml\View;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\View
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function setLayout(\Magento\Framework\View\LayoutInterface $layout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLayout');
        return $pluginInfo ? $this->___callPlugins('setLayout', func_get_args(), $pluginInfo) : parent::setLayout($layout);
    }
}
