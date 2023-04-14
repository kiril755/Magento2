<?php
namespace Magento\Shipping\Block\Adminhtml\Create;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\Create
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\Create implements \Magento\Framework\Interception\InterceptorInterface
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
    public function getBackUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackUrl');
        return $pluginInfo ? $this->___callPlugins('getBackUrl', func_get_args(), $pluginInfo) : parent::getBackUrl();
    }
}
