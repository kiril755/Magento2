<?php
namespace Magento\Catalog\Model\Product\Link;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Link
 */
class Interceptor extends \Magento\Catalog\Model\Product\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\ResourceModel\Product\Link\CollectionFactory $linkCollectionFactory, \Magento\Catalog\Model\ResourceModel\Product\Link\Product\CollectionFactory $productCollectionFactory, \Magento\CatalogInventory\Helper\Stock $stockHelper, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $linkCollectionFactory, $productCollectionFactory, $stockHelper, $resource, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCollection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCollection');
        return $pluginInfo ? $this->___callPlugins('getProductCollection', func_get_args(), $pluginInfo) : parent::getProductCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function saveProductRelations($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveProductRelations');
        return $pluginInfo ? $this->___callPlugins('saveProductRelations', func_get_args(), $pluginInfo) : parent::saveProductRelations($product);
    }
}
