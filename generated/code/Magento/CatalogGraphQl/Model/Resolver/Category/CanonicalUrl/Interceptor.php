<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Category\CanonicalUrl;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Category\CanonicalUrl
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Category\CanonicalUrl implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Helper\Category $categoryHelper)
    {
        $this->___init();
        parent::__construct($categoryHelper);
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
