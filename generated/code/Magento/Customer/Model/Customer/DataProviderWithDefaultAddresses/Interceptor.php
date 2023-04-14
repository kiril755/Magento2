<?php
namespace Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses
 */
class Interceptor extends \Magento\Customer\Model\Customer\DataProviderWithDefaultAddresses implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(string $name, string $primaryFieldName, string $requestFieldName, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Directory\Model\CountryFactory $countryFactory, \Magento\Framework\Session\SessionManagerInterface $session, \Magento\Customer\Model\FileUploaderDataResolver $fileUploaderDataResolver, \Magento\Customer\Model\AttributeMetadataResolver $attributeMetadataResolver, $allowToShowHiddenAttributes = true, array $meta = [], array $data = [], ?\Magento\Customer\Model\CustomerFactory $customerFactory = null, ?\Magento\Framework\View\Element\UiComponent\ContextInterface $context = null, ?\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $customerCollectionFactory, $eavConfig, $countryFactory, $session, $fileUploaderDataResolver, $attributeMetadataResolver, $allowToShowHiddenAttributes, $meta, $data, $customerFactory, $context, $customerRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function getData() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }

    /**
     * {@inheritdoc}
     */
    public function getMeta()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMeta');
        return $pluginInfo ? $this->___callPlugins('getMeta', func_get_args(), $pluginInfo) : parent::getMeta();
    }
}
