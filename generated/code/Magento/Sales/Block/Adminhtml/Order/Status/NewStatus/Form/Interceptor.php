<?php
namespace Magento\Sales\Block\Adminhtml\Order\Status\NewStatus\Form;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Status\NewStatus\Form
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Status\NewStatus\Form implements \Magento\Framework\Interception\InterceptorInterface
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
}
