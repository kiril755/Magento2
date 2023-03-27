<?php
namespace Magento\CatalogInventory\Model\Stock\Item;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Stock\Item
 */
class Interceptor extends \Magento\CatalogInventory\Model\Stock\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $stockItemRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $customerSession, $storeManager, $stockConfiguration, $stockRegistry, $stockItemRepository, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getMinQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinQty');
        return $pluginInfo ? $this->___callPlugins('getMinQty', func_get_args(), $pluginInfo) : parent::getMinQty();
    }
}
