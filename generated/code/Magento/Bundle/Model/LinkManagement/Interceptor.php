<?php
namespace Magento\Bundle\Model\LinkManagement;

/**
 * Interceptor class for @see \Magento\Bundle\Model\LinkManagement
 */
class Interceptor extends \Magento\Bundle\Model\LinkManagement implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Bundle\Api\Data\LinkInterfaceFactory $linkFactory, \Magento\Bundle\Model\SelectionFactory $bundleSelection, \Magento\Bundle\Model\ResourceModel\BundleFactory $bundleFactory, \Magento\Bundle\Model\ResourceModel\Option\CollectionFactory $optionCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Framework\EntityManager\MetadataPool $metadataPool)
    {
        $this->___init();
        parent::__construct($productRepository, $linkFactory, $bundleSelection, $bundleFactory, $optionCollection, $storeManager, $dataObjectHelper, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren($productSku, $optionId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren($productSku, $optionId);
    }

    /**
     * {@inheritdoc}
     */
    public function addChildByProductSku($sku, $optionId, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChildByProductSku');
        return $pluginInfo ? $this->___callPlugins('addChildByProductSku', func_get_args(), $pluginInfo) : parent::addChildByProductSku($sku, $optionId, $linkedProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function saveChild($sku, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveChild');
        return $pluginInfo ? $this->___callPlugins('saveChild', func_get_args(), $pluginInfo) : parent::saveChild($sku, $linkedProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function addChild(\Magento\Catalog\Api\Data\ProductInterface $product, $optionId, \Magento\Bundle\Api\Data\LinkInterface $linkedProduct)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addChild');
        return $pluginInfo ? $this->___callPlugins('addChild', func_get_args(), $pluginInfo) : parent::addChild($product, $optionId, $linkedProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function removeChild($sku, $optionId, $childSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeChild');
        return $pluginInfo ? $this->___callPlugins('removeChild', func_get_args(), $pluginInfo) : parent::removeChild($sku, $optionId, $childSku);
    }
}
