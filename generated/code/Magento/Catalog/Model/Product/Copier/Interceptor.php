<?php
namespace Magento\Catalog\Model\Product\Copier;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Copier
 */
class Interceptor extends \Magento\Catalog\Model\Product\Copier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\CopyConstructorInterface $copyConstructor, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\Attribute\ScopeOverriddenValue $scopeOverriddenValue, \Magento\Catalog\Model\Product\Option\Repository $optionRepository, \Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\DuplicatedProductAttributesCopier $attributeCopier)
    {
        $this->___init();
        parent::__construct($copyConstructor, $productFactory, $scopeOverriddenValue, $optionRepository, $metadataPool, $productRepository, $attributeCopier);
    }

    /**
     * {@inheritdoc}
     */
    public function copy(\Magento\Catalog\Model\Product $product) : \Magento\Catalog\Model\Product
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'copy');
        return $pluginInfo ? $this->___callPlugins('copy', func_get_args(), $pluginInfo) : parent::copy($product);
    }
}
