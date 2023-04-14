<?php
namespace Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Labels;

/**
 * Interceptor class for @see \Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Labels
 */
class Interceptor extends \Magento\SalesRule\Block\Adminhtml\Promo\Quote\Edit\Tab\Labels implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\SalesRule\Model\RuleFactory $ruleFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $ruleFactory, $data);
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
