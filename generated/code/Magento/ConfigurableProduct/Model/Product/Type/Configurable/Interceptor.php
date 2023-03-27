<?php
namespace Magento\ConfigurableProduct\Model\Product\Type\Configurable;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\Product\Type\Configurable
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\Product\Type\Configurable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\ConfigurableFactory $typeConfigurableFactory, \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $eavAttributeFactory, \Magento\ConfigurableProduct\Model\Product\Type\Configurable\AttributeFactory $configurableAttributeFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Product\CollectionFactory $productCollectionFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable\Attribute\CollectionFactory $attributeCollectionFactory, \Magento\ConfigurableProduct\Model\ResourceModel\Product\Type\Configurable $catalogProductTypeConfigurable, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $extensionAttributesJoinProcessor, ?\Magento\Framework\Cache\FrontendInterface $cache = null, ?\Magento\Customer\Model\Session $customerSession = null, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Catalog\Api\Data\ProductInterfaceFactory $productFactory = null, ?\Magento\ConfigurableProduct\Model\Product\Type\Collection\SalableProcessor $salableProcessor = null, ?\Magento\Catalog\Api\ProductAttributeRepositoryInterface $productAttributeRepository = null, ?\Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $typeConfigurableFactory, $eavAttributeFactory, $configurableAttributeFactory, $productCollectionFactory, $attributeCollectionFactory, $catalogProductTypeConfigurable, $scopeConfig, $extensionAttributesJoinProcessor, $cache, $customerSession, $serializer, $productFactory, $salableProcessor, $productAttributeRepository, $searchCriteriaBuilder, $uploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProductCollection($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProductCollection');
        return $pluginInfo ? $this->___callPlugins('getUsedProductCollection', func_get_args(), $pluginInfo) : parent::getUsedProductCollection($product);
    }

    /**
     * {@inheritdoc}
     */
    public function isPossibleBuyFromList($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isPossibleBuyFromList');
        return $pluginInfo ? $this->___callPlugins('isPossibleBuyFromList', func_get_args(), $pluginInfo) : parent::isPossibleBuyFromList($product);
    }

    /**
     * {@inheritdoc}
     */
    public function getUsedProducts($product, $requiredAttributeIds = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUsedProducts');
        return $pluginInfo ? $this->___callPlugins('getUsedProducts', func_get_args(), $pluginInfo) : parent::getUsedProducts($product, $requiredAttributeIds);
    }
}
