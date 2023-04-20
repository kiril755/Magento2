<?php
namespace Magento\User\Block\Role\Tab\Edit;

/**
 * Interceptor class for @see \Magento\User\Block\Role\Tab\Edit
 */
class Interceptor extends \Magento\User\Block\Role\Tab\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Authorization\Model\Acl\AclRetriever $aclRetriever, \Magento\Framework\Acl\RootResource $rootResource, \Magento\Authorization\Model\ResourceModel\Rules\CollectionFactory $rulesCollectionFactory, \Magento\Framework\Acl\AclResource\ProviderInterface $aclResourceProvider, \Magento\Integration\Helper\Data $integrationData, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $aclRetriever, $rootResource, $rulesCollectionFactory, $aclResourceProvider, $integrationData, $data);
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
