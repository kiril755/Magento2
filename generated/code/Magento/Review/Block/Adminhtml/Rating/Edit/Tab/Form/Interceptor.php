<?php
namespace Magento\Review\Block\Adminhtml\Rating\Edit\Tab\Form;

/**
 * Interceptor class for @see \Magento\Review\Block\Adminhtml\Rating\Edit\Tab\Form
 */
class Interceptor extends \Magento\Review\Block\Adminhtml\Rating\Edit\Tab\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Review\Model\Rating\OptionFactory $optionFactory, \Magento\Framework\Session\SessionManagerInterface $session, \Magento\Store\Model\System\Store $systemStore, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $optionFactory, $session, $systemStore, $data);
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
