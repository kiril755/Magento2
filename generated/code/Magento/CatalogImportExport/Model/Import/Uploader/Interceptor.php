<?php
namespace Magento\CatalogImportExport\Model\Import\Uploader;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\Import\Uploader
 */
class Interceptor extends \Magento\CatalogImportExport\Model\Import\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\MediaStorage\Helper\File\Storage $coreFileStorage, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $validator, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\File\ReadFactory $readFactory, $filePath = null, ?\Magento\Framework\Math\Random $random = null, ?\Magento\Framework\Filesystem\Directory\TargetDirectory $targetDirectory = null)
    {
        $this->___init();
        parent::__construct($coreFileStorageDb, $coreFileStorage, $imageFactory, $validator, $filesystem, $readFactory, $filePath, $random, $targetDirectory);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destinationFolder, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destinationFolder, $newFileName);
    }
}
