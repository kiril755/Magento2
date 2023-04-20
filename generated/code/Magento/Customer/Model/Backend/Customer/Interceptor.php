<?php
namespace Magento\Customer\Model\Backend\Customer;

/**
 * Interceptor class for @see \Magento\Customer\Model\Backend\Customer
 */
class Interceptor extends \Magento\Customer\Model\Backend\Customer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\Config $config, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Customer\Model\ResourceModel\Customer $resource, \Magento\Customer\Model\Config\Share $configShare, \Magento\Customer\Model\AddressFactory $addressFactory, \Magento\Customer\Model\ResourceModel\Address\CollectionFactory $addressesFactory, \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerDataFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Customer\Api\CustomerMetadataInterface $metadataService, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Customer\Model\AccountConfirmation $accountConfirmation = null, ?\Magento\Framework\Math\Random $mathRandom = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $config, $scopeConfig, $resource, $configShare, $addressFactory, $addressesFactory, $transportBuilder, $groupRepository, $encryptor, $dateTime, $customerDataFactory, $dataObjectProcessor, $dataObjectHelper, $metadataService, $indexerRegistry, $resourceCollection, $data, $accountConfirmation, $mathRandom);
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
