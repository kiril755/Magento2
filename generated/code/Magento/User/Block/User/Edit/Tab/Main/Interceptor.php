<?php
namespace Magento\User\Block\User\Edit\Tab\Main;

/**
 * Interceptor class for @see \Magento\User\Block\User\Edit\Tab\Main
 */
class Interceptor extends \Magento\User\Block\User\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Locale\ListsInterface $localeLists, array $data = [], ?\Magento\Framework\Locale\OptionInterface $deployedLocales = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $authSession, $localeLists, $data, $deployedLocales);
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
    public function getFormHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormHtml');
        return $pluginInfo ? $this->___callPlugins('getFormHtml', func_get_args(), $pluginInfo) : parent::getFormHtml();
    }
}
