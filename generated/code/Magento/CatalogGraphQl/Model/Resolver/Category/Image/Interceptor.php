<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Category\Image;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Category\Image
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Category\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\DirectoryList $directoryList, \Magento\Catalog\Model\Category\FileInfo $fileInfo, ?\Magento\Framework\View\Asset\Repository $assetRepo = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($directoryList, $fileInfo, $assetRepo, $logger);
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
