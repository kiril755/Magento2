<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\GenericMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $dataObjectProcessor, $data);
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
