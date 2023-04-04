<?php
namespace Magento\GoogleOptimizer\Block\Adminhtml\Cms\Page\Edit\Tab\Googleoptimizer;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Adminhtml\Cms\Page\Edit\Tab\Googleoptimizer
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Adminhtml\Cms\Page\Edit\Tab\Googleoptimizer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\GoogleOptimizer\Helper\Data $helperData, \Magento\Framework\Registry $registry, \Magento\GoogleOptimizer\Helper\Code $codeHelper, \Magento\GoogleOptimizer\Helper\Form $formHelper, \Magento\Framework\Data\FormFactory $formFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $helperData, $registry, $codeHelper, $formHelper, $formFactory, $data);
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
