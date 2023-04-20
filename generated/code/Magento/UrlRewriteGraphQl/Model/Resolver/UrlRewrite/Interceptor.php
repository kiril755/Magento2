<?php
namespace Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite;

/**
 * Interceptor class for @see \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite
 */
class Interceptor extends \Magento\UrlRewriteGraphQl\Model\Resolver\UrlRewrite implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\UrlRewrite\Model\UrlFinderInterface $urlFinder, \Magento\Framework\EntityManager\TypeResolver $typeResolver, \Magento\Framework\EntityManager\MetadataPool $metadataPool, array $entityTypeMapping = [])
    {
        $this->___init();
        parent::__construct($urlFinder, $typeResolver, $metadataPool, $entityTypeMapping);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
