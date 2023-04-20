<?php
namespace Magento\Backend\Block\Widget\Form;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Form
 */
class Interceptor extends \Magento\Backend\Block\Widget\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, array $data = [], ?\Magento\Backend\Block\Widget\Form\Element\ElementCreator $creator = null)
    {
        $this->___init();
        parent::__construct($context, $data, $creator);
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
