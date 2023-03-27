<?php
namespace Magento\Catalog\Model\Product\Gallery\Processor;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\Processor
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel, ?\Magento\Framework\File\Mime $mime = null)
    {
        $this->___init();
        parent::__construct($attributeRepository, $fileStorageDb, $mediaConfig, $filesystem, $resourceModel, $mime);
    }

    /**
     * {@inheritdoc}
     */
    public function removeImage(\Magento\Catalog\Model\Product $product, $file)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeImage');
        return $pluginInfo ? $this->___callPlugins('removeImage', func_get_args(), $pluginInfo) : parent::removeImage($product, $file);
    }
}
