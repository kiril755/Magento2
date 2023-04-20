<?php
namespace Magento\CatalogCmsGraphQl\Model\Resolver\Category\Block;

/**
 * Interceptor class for @see \Magento\CatalogCmsGraphQl\Model\Resolver\Category\Block
 */
class Interceptor extends \Magento\CatalogCmsGraphQl\Model\Resolver\Category\Block implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CmsGraphQl\Model\Resolver\DataProvider\Block $blockProvider)
    {
        $this->___init();
        parent::__construct($blockProvider);
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
