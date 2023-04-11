<?php
namespace Magento\Store\Model\Website;

/**
 * Interceptor class for @see \Magento\Store\Model\Website
 */
class Interceptor extends \Magento\Store\Model\Website implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Config\Model\ResourceModel\Config\Data $configDataResource, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\Store\Model\ResourceModel\Store\CollectionFactory $storeListFactory, \Magento\Store\Model\GroupFactory $storeGroupFactory, \Magento\Store\Model\WebsiteFactory $websiteFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Model\CurrencyFactory $currencyFactory, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\MessageQueue\PoisonPill\PoisonPillPutInterface $pillPut = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $configDataResource, $coreConfig, $storeListFactory, $storeGroupFactory, $websiteFactory, $storeManager, $currencyFactory, $resource, $resourceCollection, $data, $pillPut);
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }
}
