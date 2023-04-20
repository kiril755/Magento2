<?php
namespace Magento\CatalogInventory\Model\Adminhtml\Stock\Item;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Adminhtml\Stock\Item
 */
class Interceptor extends \Magento\CatalogInventory\Model\Adminhtml\Stock\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Api\ExtensionAttributesFactory $extensionFactory, \Magento\Framework\Api\AttributeValueFactory $customAttributeFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockItemRepositoryInterface $stockItemRepository, \Magento\Customer\Api\GroupManagementInterface $groupManagement, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $extensionFactory, $customAttributeFactory, $customerSession, $storeManager, $stockConfiguration, $stockRegistry, $stockItemRepository, $groupManagement, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomerGroupId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('getCustomerGroupId', func_get_args(), $pluginInfo) : parent::getCustomerGroupId();
    }

    /**
     * {@inheritdoc}
     */
    public function hasAdminArea()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAdminArea');
        return $pluginInfo ? $this->___callPlugins('hasAdminArea', func_get_args(), $pluginInfo) : parent::hasAdminArea();
    }

    /**
     * {@inheritdoc}
     */
    public function getShowDefaultNotificationMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getShowDefaultNotificationMessage');
        return $pluginInfo ? $this->___callPlugins('getShowDefaultNotificationMessage', func_get_args(), $pluginInfo) : parent::getShowDefaultNotificationMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }

    /**
     * {@inheritdoc}
     */
    public function getItemId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemId');
        return $pluginInfo ? $this->___callPlugins('getItemId', func_get_args(), $pluginInfo) : parent::getItemId();
    }

    /**
     * {@inheritdoc}
     */
    public function getWebsiteId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWebsiteId');
        return $pluginInfo ? $this->___callPlugins('getWebsiteId', func_get_args(), $pluginInfo) : parent::getWebsiteId();
    }

    /**
     * {@inheritdoc}
     */
    public function getStockId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockId');
        return $pluginInfo ? $this->___callPlugins('getStockId', func_get_args(), $pluginInfo) : parent::getStockId();
    }

    /**
     * {@inheritdoc}
     */
    public function getProductId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductId');
        return $pluginInfo ? $this->___callPlugins('getProductId', func_get_args(), $pluginInfo) : parent::getProductId();
    }

    /**
     * {@inheritdoc}
     */
    public function getStockStatusChangedAuto()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStockStatusChangedAuto');
        return $pluginInfo ? $this->___callPlugins('getStockStatusChangedAuto', func_get_args(), $pluginInfo) : parent::getStockStatusChangedAuto();
    }

    /**
     * {@inheritdoc}
     */
    public function getQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQty');
        return $pluginInfo ? $this->___callPlugins('getQty', func_get_args(), $pluginInfo) : parent::getQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsInStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsInStock');
        return $pluginInfo ? $this->___callPlugins('getIsInStock', func_get_args(), $pluginInfo) : parent::getIsInStock();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsQtyDecimal()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsQtyDecimal');
        return $pluginInfo ? $this->___callPlugins('getIsQtyDecimal', func_get_args(), $pluginInfo) : parent::getIsQtyDecimal();
    }

    /**
     * {@inheritdoc}
     */
    public function getIsDecimalDivided()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIsDecimalDivided');
        return $pluginInfo ? $this->___callPlugins('getIsDecimalDivided', func_get_args(), $pluginInfo) : parent::getIsDecimalDivided();
    }

    /**
     * {@inheritdoc}
     */
    public function getLowStockDate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLowStockDate');
        return $pluginInfo ? $this->___callPlugins('getLowStockDate', func_get_args(), $pluginInfo) : parent::getLowStockDate();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMinQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMinQty');
        return $pluginInfo ? $this->___callPlugins('getUseConfigMinQty', func_get_args(), $pluginInfo) : parent::getUseConfigMinQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinQty');
        return $pluginInfo ? $this->___callPlugins('getMinQty', func_get_args(), $pluginInfo) : parent::getMinQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMinSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMinSaleQty');
        return $pluginInfo ? $this->___callPlugins('getUseConfigMinSaleQty', func_get_args(), $pluginInfo) : parent::getUseConfigMinSaleQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getMinSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMinSaleQty');
        return $pluginInfo ? $this->___callPlugins('getMinSaleQty', func_get_args(), $pluginInfo) : parent::getMinSaleQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigMaxSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigMaxSaleQty');
        return $pluginInfo ? $this->___callPlugins('getUseConfigMaxSaleQty', func_get_args(), $pluginInfo) : parent::getUseConfigMaxSaleQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getMaxSaleQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMaxSaleQty');
        return $pluginInfo ? $this->___callPlugins('getMaxSaleQty', func_get_args(), $pluginInfo) : parent::getMaxSaleQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigNotifyStockQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigNotifyStockQty');
        return $pluginInfo ? $this->___callPlugins('getUseConfigNotifyStockQty', func_get_args(), $pluginInfo) : parent::getUseConfigNotifyStockQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getNotifyStockQty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNotifyStockQty');
        return $pluginInfo ? $this->___callPlugins('getNotifyStockQty', func_get_args(), $pluginInfo) : parent::getNotifyStockQty();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigEnableQtyInc()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigEnableQtyInc');
        return $pluginInfo ? $this->___callPlugins('getUseConfigEnableQtyInc', func_get_args(), $pluginInfo) : parent::getUseConfigEnableQtyInc();
    }

    /**
     * {@inheritdoc}
     */
    public function getEnableQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEnableQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('getEnableQtyIncrements', func_get_args(), $pluginInfo) : parent::getEnableQtyIncrements();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('getUseConfigQtyIncrements', func_get_args(), $pluginInfo) : parent::getUseConfigQtyIncrements();
    }

    /**
     * {@inheritdoc}
     */
    public function getQtyIncrements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('getQtyIncrements', func_get_args(), $pluginInfo) : parent::getQtyIncrements();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigBackorders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigBackorders');
        return $pluginInfo ? $this->___callPlugins('getUseConfigBackorders', func_get_args(), $pluginInfo) : parent::getUseConfigBackorders();
    }

    /**
     * {@inheritdoc}
     */
    public function getBackorders()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBackorders');
        return $pluginInfo ? $this->___callPlugins('getBackorders', func_get_args(), $pluginInfo) : parent::getBackorders();
    }

    /**
     * {@inheritdoc}
     */
    public function getUseConfigManageStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUseConfigManageStock');
        return $pluginInfo ? $this->___callPlugins('getUseConfigManageStock', func_get_args(), $pluginInfo) : parent::getUseConfigManageStock();
    }

    /**
     * {@inheritdoc}
     */
    public function getManageStock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getManageStock');
        return $pluginInfo ? $this->___callPlugins('getManageStock', func_get_args(), $pluginInfo) : parent::getManageStock();
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
    public function setProduct(\Magento\Catalog\Model\Product $product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProduct');
        return $pluginInfo ? $this->___callPlugins('setProduct', func_get_args(), $pluginInfo) : parent::setProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function setStoreId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStoreId');
        return $pluginInfo ? $this->___callPlugins('setStoreId', func_get_args(), $pluginInfo) : parent::setStoreId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreId');
        return $pluginInfo ? $this->___callPlugins('getStoreId', func_get_args(), $pluginInfo) : parent::getStoreId();
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomerGroupId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomerGroupId');
        return $pluginInfo ? $this->___callPlugins('setCustomerGroupId', func_get_args(), $pluginInfo) : parent::setCustomerGroupId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setItemId($itemId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setItemId');
        return $pluginInfo ? $this->___callPlugins('setItemId', func_get_args(), $pluginInfo) : parent::setItemId($itemId);
    }

    /**
     * {@inheritdoc}
     */
    public function setProductId($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setProductId');
        return $pluginInfo ? $this->___callPlugins('setProductId', func_get_args(), $pluginInfo) : parent::setProductId($productId);
    }

    /**
     * {@inheritdoc}
     */
    public function setWebsiteId($websiteId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setWebsiteId');
        return $pluginInfo ? $this->___callPlugins('setWebsiteId', func_get_args(), $pluginInfo) : parent::setWebsiteId($websiteId);
    }

    /**
     * {@inheritdoc}
     */
    public function setStockId($stockId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStockId');
        return $pluginInfo ? $this->___callPlugins('setStockId', func_get_args(), $pluginInfo) : parent::setStockId($stockId);
    }

    /**
     * {@inheritdoc}
     */
    public function setQty($qty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQty');
        return $pluginInfo ? $this->___callPlugins('setQty', func_get_args(), $pluginInfo) : parent::setQty($qty);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsInStock($isInStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsInStock');
        return $pluginInfo ? $this->___callPlugins('setIsInStock', func_get_args(), $pluginInfo) : parent::setIsInStock($isInStock);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsQtyDecimal($isQtyDecimal)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsQtyDecimal');
        return $pluginInfo ? $this->___callPlugins('setIsQtyDecimal', func_get_args(), $pluginInfo) : parent::setIsQtyDecimal($isQtyDecimal);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMinQty($useConfigMinQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMinQty');
        return $pluginInfo ? $this->___callPlugins('setUseConfigMinQty', func_get_args(), $pluginInfo) : parent::setUseConfigMinQty($useConfigMinQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setMinQty($minQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMinQty');
        return $pluginInfo ? $this->___callPlugins('setMinQty', func_get_args(), $pluginInfo) : parent::setMinQty($minQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMinSaleQty($useConfigMinSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMinSaleQty');
        return $pluginInfo ? $this->___callPlugins('setUseConfigMinSaleQty', func_get_args(), $pluginInfo) : parent::setUseConfigMinSaleQty($useConfigMinSaleQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setMinSaleQty($minSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMinSaleQty');
        return $pluginInfo ? $this->___callPlugins('setMinSaleQty', func_get_args(), $pluginInfo) : parent::setMinSaleQty($minSaleQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigMaxSaleQty($useConfigMaxSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigMaxSaleQty');
        return $pluginInfo ? $this->___callPlugins('setUseConfigMaxSaleQty', func_get_args(), $pluginInfo) : parent::setUseConfigMaxSaleQty($useConfigMaxSaleQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setMaxSaleQty($maxSaleQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setMaxSaleQty');
        return $pluginInfo ? $this->___callPlugins('setMaxSaleQty', func_get_args(), $pluginInfo) : parent::setMaxSaleQty($maxSaleQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigBackorders($useConfigBackorders)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigBackorders');
        return $pluginInfo ? $this->___callPlugins('setUseConfigBackorders', func_get_args(), $pluginInfo) : parent::setUseConfigBackorders($useConfigBackorders);
    }

    /**
     * {@inheritdoc}
     */
    public function setBackorders($backOrders)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setBackorders');
        return $pluginInfo ? $this->___callPlugins('setBackorders', func_get_args(), $pluginInfo) : parent::setBackorders($backOrders);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigNotifyStockQty($useConfigNotifyStockQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigNotifyStockQty');
        return $pluginInfo ? $this->___callPlugins('setUseConfigNotifyStockQty', func_get_args(), $pluginInfo) : parent::setUseConfigNotifyStockQty($useConfigNotifyStockQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setNotifyStockQty($notifyStockQty)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setNotifyStockQty');
        return $pluginInfo ? $this->___callPlugins('setNotifyStockQty', func_get_args(), $pluginInfo) : parent::setNotifyStockQty($notifyStockQty);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigQtyIncrements($useConfigQtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('setUseConfigQtyIncrements', func_get_args(), $pluginInfo) : parent::setUseConfigQtyIncrements($useConfigQtyIncrements);
    }

    /**
     * {@inheritdoc}
     */
    public function setQtyIncrements($qtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('setQtyIncrements', func_get_args(), $pluginInfo) : parent::setQtyIncrements($qtyIncrements);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigEnableQtyInc($useConfigEnableQtyInc)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigEnableQtyInc');
        return $pluginInfo ? $this->___callPlugins('setUseConfigEnableQtyInc', func_get_args(), $pluginInfo) : parent::setUseConfigEnableQtyInc($useConfigEnableQtyInc);
    }

    /**
     * {@inheritdoc}
     */
    public function setEnableQtyIncrements($enableQtyIncrements)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEnableQtyIncrements');
        return $pluginInfo ? $this->___callPlugins('setEnableQtyIncrements', func_get_args(), $pluginInfo) : parent::setEnableQtyIncrements($enableQtyIncrements);
    }

    /**
     * {@inheritdoc}
     */
    public function setUseConfigManageStock($useConfigManageStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setUseConfigManageStock');
        return $pluginInfo ? $this->___callPlugins('setUseConfigManageStock', func_get_args(), $pluginInfo) : parent::setUseConfigManageStock($useConfigManageStock);
    }

    /**
     * {@inheritdoc}
     */
    public function setManageStock($manageStock)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setManageStock');
        return $pluginInfo ? $this->___callPlugins('setManageStock', func_get_args(), $pluginInfo) : parent::setManageStock($manageStock);
    }

    /**
     * {@inheritdoc}
     */
    public function setLowStockDate($lowStockDate)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setLowStockDate');
        return $pluginInfo ? $this->___callPlugins('setLowStockDate', func_get_args(), $pluginInfo) : parent::setLowStockDate($lowStockDate);
    }

    /**
     * {@inheritdoc}
     */
    public function setIsDecimalDivided($isDecimalDivided)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIsDecimalDivided');
        return $pluginInfo ? $this->___callPlugins('setIsDecimalDivided', func_get_args(), $pluginInfo) : parent::setIsDecimalDivided($isDecimalDivided);
    }

    /**
     * {@inheritdoc}
     */
    public function setStockStatusChangedAuto($stockStatusChangedAuto)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStockStatusChangedAuto');
        return $pluginInfo ? $this->___callPlugins('setStockStatusChangedAuto', func_get_args(), $pluginInfo) : parent::setStockStatusChangedAuto($stockStatusChangedAuto);
    }

    /**
     * {@inheritdoc}
     */
    public function getExtensionAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('getExtensionAttributes', func_get_args(), $pluginInfo) : parent::getExtensionAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function setExtensionAttributes(\Magento\CatalogInventory\Api\Data\StockItemExtensionInterface $extensionAttributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setExtensionAttributes');
        return $pluginInfo ? $this->___callPlugins('setExtensionAttributes', func_get_args(), $pluginInfo) : parent::setExtensionAttributes($extensionAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributes', func_get_args(), $pluginInfo) : parent::getCustomAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttribute($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('getCustomAttribute', func_get_args(), $pluginInfo) : parent::getCustomAttribute($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttributes(array $attributes)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttributes');
        return $pluginInfo ? $this->___callPlugins('setCustomAttributes', func_get_args(), $pluginInfo) : parent::setCustomAttributes($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function setCustomAttribute($attributeCode, $attributeValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('setCustomAttribute', func_get_args(), $pluginInfo) : parent::setCustomAttribute($attributeCode, $attributeValue);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function setId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function setIdFieldName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIdFieldName');
        return $pluginInfo ? $this->___callPlugins('setIdFieldName', func_get_args(), $pluginInfo) : parent::setIdFieldName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdFieldName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdFieldName');
        return $pluginInfo ? $this->___callPlugins('getIdFieldName', func_get_args(), $pluginInfo) : parent::getIdFieldName();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function isDeleted($isDeleted = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isDeleted');
        return $pluginInfo ? $this->___callPlugins('isDeleted', func_get_args(), $pluginInfo) : parent::isDeleted($isDeleted);
    }

    /**
     * {@inheritdoc}
     */
    public function hasDataChanges()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasDataChanges');
        return $pluginInfo ? $this->___callPlugins('hasDataChanges', func_get_args(), $pluginInfo) : parent::hasDataChanges();
    }

    /**
     * {@inheritdoc}
     */
    public function setDataChanges($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataChanges');
        return $pluginInfo ? $this->___callPlugins('setDataChanges', func_get_args(), $pluginInfo) : parent::setDataChanges($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOrigData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOrigData');
        return $pluginInfo ? $this->___callPlugins('getOrigData', func_get_args(), $pluginInfo) : parent::getOrigData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrigData($key = null, $data = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrigData');
        return $pluginInfo ? $this->___callPlugins('setOrigData', func_get_args(), $pluginInfo) : parent::setOrigData($key, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function dataHasChangedFor($field)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dataHasChangedFor');
        return $pluginInfo ? $this->___callPlugins('dataHasChangedFor', func_get_args(), $pluginInfo) : parent::dataHasChangedFor($field);
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceName');
        return $pluginInfo ? $this->___callPlugins('getResourceName', func_get_args(), $pluginInfo) : parent::getResourceName();
    }

    /**
     * {@inheritdoc}
     */
    public function getResourceCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResourceCollection');
        return $pluginInfo ? $this->___callPlugins('getResourceCollection', func_get_args(), $pluginInfo) : parent::getResourceCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function getCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCollection');
        return $pluginInfo ? $this->___callPlugins('getCollection', func_get_args(), $pluginInfo) : parent::getCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function load($modelId, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($modelId, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeLoad($identifier, $field = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeLoad');
        return $pluginInfo ? $this->___callPlugins('beforeLoad', func_get_args(), $pluginInfo) : parent::beforeLoad($identifier, $field);
    }

    /**
     * {@inheritdoc}
     */
    public function afterLoad()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterLoad');
        return $pluginInfo ? $this->___callPlugins('afterLoad', func_get_args(), $pluginInfo) : parent::afterLoad();
    }

    /**
     * {@inheritdoc}
     */
    public function isSaveAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSaveAllowed');
        return $pluginInfo ? $this->___callPlugins('isSaveAllowed', func_get_args(), $pluginInfo) : parent::isSaveAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function setHasDataChanges($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setHasDataChanges');
        return $pluginInfo ? $this->___callPlugins('setHasDataChanges', func_get_args(), $pluginInfo) : parent::setHasDataChanges($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function afterCommitCallback()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterCommitCallback');
        return $pluginInfo ? $this->___callPlugins('afterCommitCallback', func_get_args(), $pluginInfo) : parent::afterCommitCallback();
    }

    /**
     * {@inheritdoc}
     */
    public function isObjectNew($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isObjectNew');
        return $pluginInfo ? $this->___callPlugins('isObjectNew', func_get_args(), $pluginInfo) : parent::isObjectNew($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function beforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeSave');
        return $pluginInfo ? $this->___callPlugins('beforeSave', func_get_args(), $pluginInfo) : parent::beforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function validateBeforeSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateBeforeSave');
        return $pluginInfo ? $this->___callPlugins('validateBeforeSave', func_get_args(), $pluginInfo) : parent::validateBeforeSave();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheTags()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheTags');
        return $pluginInfo ? $this->___callPlugins('getCacheTags', func_get_args(), $pluginInfo) : parent::getCacheTags();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanModelCache()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanModelCache');
        return $pluginInfo ? $this->___callPlugins('cleanModelCache', func_get_args(), $pluginInfo) : parent::cleanModelCache();
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function delete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete();
    }

    /**
     * {@inheritdoc}
     */
    public function beforeDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'beforeDelete');
        return $pluginInfo ? $this->___callPlugins('beforeDelete', func_get_args(), $pluginInfo) : parent::beforeDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDelete()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDelete');
        return $pluginInfo ? $this->___callPlugins('afterDelete', func_get_args(), $pluginInfo) : parent::afterDelete();
    }

    /**
     * {@inheritdoc}
     */
    public function afterDeleteCommit()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterDeleteCommit');
        return $pluginInfo ? $this->___callPlugins('afterDeleteCommit', func_get_args(), $pluginInfo) : parent::afterDeleteCommit();
    }

    /**
     * {@inheritdoc}
     */
    public function getResource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResource');
        return $pluginInfo ? $this->___callPlugins('getResource', func_get_args(), $pluginInfo) : parent::getResource();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityId');
        return $pluginInfo ? $this->___callPlugins('getEntityId', func_get_args(), $pluginInfo) : parent::getEntityId();
    }

    /**
     * {@inheritdoc}
     */
    public function setEntityId($entityId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setEntityId');
        return $pluginInfo ? $this->___callPlugins('setEntityId', func_get_args(), $pluginInfo) : parent::setEntityId($entityId);
    }

    /**
     * {@inheritdoc}
     */
    public function clearInstance()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearInstance');
        return $pluginInfo ? $this->___callPlugins('clearInstance', func_get_args(), $pluginInfo) : parent::clearInstance();
    }

    /**
     * {@inheritdoc}
     */
    public function getStoredData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoredData');
        return $pluginInfo ? $this->___callPlugins('getStoredData', func_get_args(), $pluginInfo) : parent::getStoredData();
    }

    /**
     * {@inheritdoc}
     */
    public function getEventPrefix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEventPrefix');
        return $pluginInfo ? $this->___callPlugins('getEventPrefix', func_get_args(), $pluginInfo) : parent::getEventPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
