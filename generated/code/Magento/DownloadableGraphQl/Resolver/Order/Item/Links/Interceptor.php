<?php
namespace Magento\DownloadableGraphQl\Resolver\Order\Item\Links;

/**
 * Interceptor class for @see \Magento\DownloadableGraphQl\Resolver\Order\Item\Links
 */
class Interceptor extends \Magento\DownloadableGraphQl\Resolver\Order\Item\Links implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\DownloadableGraphQl\Model\ConvertLinksToArray $convertLinksToArray, \Magento\Downloadable\Model\ResourceModel\Link\CollectionFactory $linkCollectionFactory, \Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\Framework\Serialize\Serializer\Json $serializer)
    {
        $this->___init();
        parent::__construct($convertLinksToArray, $linkCollectionFactory, $valueFactory, $serializer);
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
