<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Front;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Front
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Edit\Tab\Front implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Source\Yesno $yesNo, \Magento\Eav\Block\Adminhtml\Attribute\PropertyLocker $propertyLocker, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $yesNo, $propertyLocker, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function setForm(\Magento\Framework\Data\Form $form)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setForm');
        return $pluginInfo ? $this->___callPlugins('setForm', func_get_args(), $pluginInfo) : parent::setForm($form);
    }
}
