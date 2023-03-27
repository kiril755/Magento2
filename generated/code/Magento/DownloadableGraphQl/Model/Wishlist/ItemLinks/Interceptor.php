<?php
namespace Magento\DownloadableGraphQl\Model\Wishlist\ItemLinks;

/**
 * Interceptor class for @see \Magento\DownloadableGraphQl\Model\Wishlist\ItemLinks
 */
class Interceptor extends \Magento\DownloadableGraphQl\Model\Wishlist\ItemLinks implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DownloadableGraphQl\Model\ConvertLinksToArray $convertLinksToArray, \Magento\Downloadable\Helper\Catalog\Product\Configuration $downloadableConfiguration)
    {
        $this->___init();
        parent::__construct($convertLinksToArray, $downloadableConfiguration);
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
