<?php
namespace Magento\Catalog\Model\Product\Option\Repository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Option\Repository
 */
class Interceptor extends \Magento\Catalog\Model\Product\Option\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\Product\Option $optionResource, \Magento\Catalog\Model\Product\Option\Converter $converter, ?\Magento\Catalog\Model\ResourceModel\Product\Option\CollectionFactory $collectionFactory = null, ?\Magento\Catalog\Model\Product\OptionFactory $optionFactory = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null)
    {
        $this->___init();
        parent::__construct($productRepository, $optionResource, $converter, $collectionFactory, $optionFactory, $metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductCustomOptionInterface $option)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($option);
    }
}
