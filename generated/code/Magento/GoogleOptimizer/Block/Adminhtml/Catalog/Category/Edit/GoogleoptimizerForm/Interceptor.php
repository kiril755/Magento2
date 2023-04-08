<?php
namespace Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\GoogleoptimizerForm;

/**
 * Interceptor class for @see \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\GoogleoptimizerForm
 */
class Interceptor extends \Magento\GoogleOptimizer\Block\Adminhtml\Catalog\Category\Edit\GoogleoptimizerForm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\GoogleOptimizer\Helper\Code $codeHelper, \Magento\GoogleOptimizer\Helper\Form $formHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $codeHelper, $formHelper, $data);
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
