<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Form;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Form
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Widget\Model\WidgetFactory $widgetFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $widgetFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
