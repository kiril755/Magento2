<?php
namespace Magento\Catalog\Model\Product\Gallery\CreateHandler;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Gallery\CreateHandler
 */
class Interceptor extends \Magento\Catalog\Model\Product\Gallery\CreateHandler implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\EntityManager\MetadataPool $metadataPool, \Magento\Catalog\Api\ProductAttributeRepositoryInterface $attributeRepository, \Magento\Catalog\Model\ResourceModel\Product\Gallery $resourceModel, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Catalog\Model\Product\Media\Config $mediaConfig, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Helper\File\Storage\Database $fileStorageDb, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Catalog\Model\Product\Gallery\DeleteValidator $deleteValidator = null)
    {
        $this->___init();
        parent::__construct($metadataPool, $attributeRepository, $resourceModel, $jsonHelper, $mediaConfig, $filesystem, $fileStorageDb, $storeManager, $deleteValidator);
    }

    /**
     * {@inheritdoc}
     */
    public function execute($product, $arguments = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($product, $arguments);
    }
}
