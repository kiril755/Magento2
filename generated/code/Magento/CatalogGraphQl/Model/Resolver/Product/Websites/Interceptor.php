<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Product\Websites;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Product\Websites
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Product\Websites implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\CatalogGraphQl\Model\Resolver\Product\Websites\Collection $productWebsitesCollection)
    {
        $this->___init();
        parent::__construct($valueFactory, $productWebsitesCollection);
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
