<?php
namespace Magento\Backend\Block\System\Store\Edit\Form\Website;

/**
 * Interceptor class for @see \Magento\Backend\Block\System\Store\Edit\Form\Website
 */
class Interceptor extends \Magento\Backend\Block\System\Store\Edit\Form\Website implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Store\Model\GroupFactory $groupFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $groupFactory, $data);
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
