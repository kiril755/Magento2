<?php
namespace Magento\Config\Block\System\Config\Form;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Form
 */
class Interceptor extends \Magento\Config\Block\System\Config\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Config\Model\Config\Factory $configFactory, \Magento\Config\Model\Config\Structure $configStructure, \Magento\Config\Block\System\Config\Form\Fieldset\Factory $fieldsetFactory, \Magento\Config\Block\System\Config\Form\Field\Factory $fieldFactory, array $data = [], ?\Magento\Config\Model\Config\Reader\Source\Deployed\SettingChecker $settingChecker = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $configFactory, $configStructure, $fieldsetFactory, $fieldFactory, $data, $settingChecker);
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
