<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Newsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Newsletter\Model\SubscriberFactory $subscriberFactory, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Store\Model\System\Store $systemStore, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Model\Config\Share $shareConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $subscriberFactory, $customerAccountManagement, $systemStore, $customerRepository, $shareConfig, $data);
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
