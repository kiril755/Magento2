<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Info;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Info
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Edit\Tab\Info implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function getFormHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormHtml');
        return $pluginInfo ? $this->___callPlugins('getFormHtml', func_get_args(), $pluginInfo) : parent::getFormHtml();
    }
}
