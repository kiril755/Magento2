<?php
namespace Magento\Customer\Model\CustomerExtractor;

/**
 * Interceptor class for @see \Magento\Customer\Model\CustomerExtractor
 */
class Interceptor extends \Magento\Customer\Model\CustomerExtractor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\GroupManagementInterface $customerGroupManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper)
    {
        $this->___init();
        parent::__construct($formFactory, $customerFactory, $storeManager, $customerGroupManagement, $dataObjectHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function extract($formCode, \Magento\Framework\App\RequestInterface $request, array $attributeValues = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'extract');
        return $pluginInfo ? $this->___callPlugins('extract', func_get_args(), $pluginInfo) : parent::extract($formCode, $request, $attributeValues);
    }
}
