<?php
namespace Magento\Integration\Block\Adminhtml\Integration\Activate\Permissions\Tab\Webapi;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Integration\Activate\Permissions\Tab\Webapi
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Integration\Activate\Permissions\Tab\Webapi implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Acl\RootResource $rootResource, \Magento\Framework\Acl\AclResource\ProviderInterface $resourceProvider, \Magento\Integration\Helper\Data $integrationData, \Magento\Framework\Json\Encoder $encoder, \Magento\Integration\Api\IntegrationServiceInterface $integrationService, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $rootResource, $resourceProvider, $integrationData, $encoder, $integrationService, $data);
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
