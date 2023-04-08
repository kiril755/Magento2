<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Product\MediaGallery\Url implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\ImageFactory $productImageFactory, \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\Image\Placeholder $placeholderProvider)
    {
        $this->___init();
        parent::__construct($productImageFactory, $placeholderProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
