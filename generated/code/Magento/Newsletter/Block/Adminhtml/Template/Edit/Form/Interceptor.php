<?php
namespace Magento\Newsletter\Block\Adminhtml\Template\Edit\Form;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Template\Edit\Form
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Template\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Cms\Model\Wysiwyg\Config $wysiwygConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $wysiwygConfig, $data);
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
