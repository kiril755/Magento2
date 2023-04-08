<?php
namespace Magento\GroupedProduct\Model\Product\Type\Grouped\Backend;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Model\Product\Type\Grouped\Backend
 */
class Interceptor extends \Magento\GroupedProduct\Model\Product\Type\Grouped\Backend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Option $catalogProductOption, \Magento\Eav\Model\Config $eavConfig, \Magento\Catalog\Model\Product\Type $catalogProductType, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Registry $coreRegistry, \Psr\Log\LoggerInterface $logger, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\GroupedProduct\Model\ResourceModel\Product\Link $catalogProductLink, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Product\Attribute\Source\Status $catalogProductStatus, \Magento\Framework\App\State $appState, \Magento\Msrp\Helper\Data $msrpData, ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\File\UploaderFactory $uploaderFactory = null)
    {
        $this->___init();
        parent::__construct($catalogProductOption, $eavConfig, $catalogProductType, $eventManager, $fileStorageDb, $filesystem, $coreRegistry, $logger, $productRepository, $catalogProductLink, $storeManager, $catalogProductStatus, $appState, $msrpData, $serializer, $uploaderFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function getAssociatedProductCollection($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAssociatedProductCollection');
        return $pluginInfo ? $this->___callPlugins('getAssociatedProductCollection', func_get_args(), $pluginInfo) : parent::getAssociatedProductCollection($product);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareForCartAdvanced(\Magento\Framework\DataObject $buyRequest, $product, $processMode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareForCartAdvanced');
        return $pluginInfo ? $this->___callPlugins('prepareForCartAdvanced', func_get_args(), $pluginInfo) : parent::prepareForCartAdvanced($buyRequest, $product, $processMode);
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
