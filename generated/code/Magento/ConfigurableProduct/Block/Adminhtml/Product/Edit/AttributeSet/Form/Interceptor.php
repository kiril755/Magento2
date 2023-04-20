<?php
namespace Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\AttributeSet\Form;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\AttributeSet\Form
 */
class Interceptor extends \Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\AttributeSet\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Catalog\Api\AttributeSetRepositoryInterface $attributeSetRepository, \Magento\Catalog\Model\Product\AttributeSet\Options $attributeSetOptions, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $attributeSetRepository, $attributeSetOptions, $data);
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
