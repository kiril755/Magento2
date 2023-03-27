<?php
namespace Magento\Backend\Block\Widget\Grid\Massaction\Additional;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Massaction\Additional
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Massaction\Additional implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\View\Layout\Argument\Interpreter\Options $optionsInterpreter, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $optionsInterpreter, $data);
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
