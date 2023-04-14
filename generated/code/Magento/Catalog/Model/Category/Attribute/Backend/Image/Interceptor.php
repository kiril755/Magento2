<?php
namespace Magento\Catalog\Model\Category\Attribute\Backend\Image;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category\Attribute\Backend\Image
 */
class Interceptor extends \Magento\Catalog\Model\Category\Attribute\Backend\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Catalog\Model\ImageUploader $imageUploader = null)
    {
        $this->___init();
        parent::__construct($logger, $filesystem, $fileUploaderFactory, $storeManager, $imageUploader);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
