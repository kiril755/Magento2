<?php
namespace Magento\Tax\Block\Adminhtml\Rule\Edit\Form;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rule\Edit\Form
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rule\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Tax\Model\Rate\Source $rateSource, \Magento\Tax\Api\TaxRuleRepositoryInterface $ruleService, \Magento\Tax\Api\TaxClassRepositoryInterface $taxClassService, \Magento\Tax\Model\TaxClass\Source\Customer $customerTaxClassSource, \Magento\Tax\Model\TaxClass\Source\Product $productTaxClassSource, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $rateSource, $ruleService, $taxClassService, $customerTaxClassSource, $productTaxClassSource, $data);
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
