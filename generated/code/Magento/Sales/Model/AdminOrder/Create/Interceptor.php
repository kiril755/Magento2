<?php
namespace Magento\Sales\Model\AdminOrder\Create;

/**
 * Interceptor class for @see \Magento\Sales\Model\AdminOrder\Create
 */
class Interceptor extends \Magento\Sales\Model\AdminOrder\Create implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Registry $coreRegistry, \Magento\Sales\Model\Config $salesConfig, \Magento\Backend\Model\Session\Quote $quoteSession, \Psr\Log\LoggerInterface $logger, \Magento\Framework\DataObject\Copy $objectCopyService, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Sales\Model\AdminOrder\Product\Quote\Initializer $quoteInitializer, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressFactory, \Magento\Customer\Model\Metadata\FormFactory $metadataFormFactory, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Sales\Model\AdminOrder\EmailSender $emailSender, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\Quote\Model\Quote\Item\Updater $quoteItemUpdater, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Customer\Api\Data\CustomerInterfaceFactory $customerFactory, \Magento\Customer\Model\Customer\Mapper $customerMapper, \Magento\Quote\Api\CartManagementInterface $quoteManagement, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Sales\Api\OrderManagementInterface $orderManagement, \Magento\Quote\Model\QuoteFactory $quoteFactory, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\Api\ExtensibleDataObjectConverter $dataObjectConverter = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Quote\Model\Quote\Address\CustomAttributeListInterface $customAttributeList = null)
    {
        $this->___init();
        parent::__construct($objectManager, $eventManager, $coreRegistry, $salesConfig, $quoteSession, $logger, $objectCopyService, $messageManager, $quoteInitializer, $customerRepository, $addressRepository, $addressFactory, $metadataFormFactory, $groupRepository, $scopeConfig, $emailSender, $stockRegistry, $quoteItemUpdater, $objectFactory, $quoteRepository, $accountManagement, $customerFactory, $customerMapper, $quoteManagement, $dataObjectHelper, $orderManagement, $quoteFactory, $data, $serializer, $dataObjectConverter, $storeManager, $customAttributeList);
    }

    /**
     * {@inheritdoc}
     */
    public function setShippingAddress($address)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setShippingAddress');
        return $pluginInfo ? $this->___callPlugins('setShippingAddress', func_get_args(), $pluginInfo) : parent::setShippingAddress($address);
    }
}
