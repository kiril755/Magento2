<?php
namespace Magento\Bundle\Model\Product\Type;

/**
 * Interceptor class for @see \Magento\Bundle\Model\Product\Type
 */
class Interceptor extends \Magento\Bundle\Model\Product\Type implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Product $catalogProduct, \Magento\Catalog\Helper\Data $catalogData, \Magento\Bundle\Model\SelectionFactory $bundleModelSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Selection\CollectionFactory $bundleCollection, \Magento\Catalog\Model\Config $config, \Magento\Bundle\Model\ResourceModel\Selection $bundleSelection, \Magento\Bundle\Model\OptionFactory $bundleOption, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Bundle\Model\ResourceModel\Selection\Collection\FilterApplier $selectionCollectionFilterApplier = null, ?\Magento\Framework\Stdlib\ArrayUtils $arrayUtility = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $catalogProduct, $catalogData, $bundleModelSelection, $bundleFactory, $bundleCollection, $config, $bundleSelection, $bundleOption, $storeManager, $priceCurrency, $stockRegistry, $stockState, $serializer, $metadataPool, $selectionCollectionFilterApplier, $arrayUtility, $uploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function isSalable($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSalable');
        return $pluginInfo ? $this->___callPlugins('isSalable', func_get_args(), $pluginInfo) : parent::isSalable($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        return $pluginInfo ? $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo) : parent::isPossibleBuyFromList($product);
    }
}
