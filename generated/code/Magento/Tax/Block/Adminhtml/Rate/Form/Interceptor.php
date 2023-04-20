<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Form;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Form
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Directory\Model\RegionFactory $regionFactory, \Magento\Directory\Model\Config\Source\Country $country, \Magento\Tax\Block\Adminhtml\Rate\Title\FieldsetFactory $fieldsetFactory, \Magento\Tax\Helper\Data $taxData, \Magento\Tax\Api\TaxRateRepositoryInterface $taxRateRepository, \Magento\Tax\Model\TaxRateCollection $taxRateCollection, \Magento\Tax\Model\Calculation\Rate\Converter $taxRateConverter, array $data = [], ?\Magento\Directory\Helper\Data $directoryHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $regionFactory, $country, $fieldsetFactory, $taxData, $taxRateRepository, $taxRateCollection, $taxRateConverter, $data, $directoryHelper);
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
