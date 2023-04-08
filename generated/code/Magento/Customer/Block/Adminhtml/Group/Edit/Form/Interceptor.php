<?php
namespace Magento\Customer\Block\Adminhtml\Group\Edit\Form;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Group\Edit\Form
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Group\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Tax\Model\TaxClass\Source\Customer $taxCustomer, \Magento\Tax\Helper\Data $taxHelper, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Customer\Api\Data\GroupInterfaceFactory $groupDataFactory, array $data = [], ?\Magento\Store\Model\System\Store $systemStore = null, ?\Magento\Customer\Api\GroupExcludedWebsiteRepositoryInterface $groupExcludedWebsiteRepository = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $taxCustomer, $taxHelper, $groupRepository, $groupDataFactory, $data, $systemStore, $groupExcludedWebsiteRepository);
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
