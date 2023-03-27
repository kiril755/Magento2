<?php
namespace Magento\Cms\Model\Wysiwyg\Images\Storage;

/**
 * Interceptor class for @see \Magento\Cms\Model\Wysiwyg\Images\Storage
 */
class Interceptor extends \Magento\Cms\Model\Wysiwyg\Images\Storage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Model\Session $session, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Cms\Helper\Wysiwyg\Images $cmsWysiwygImages, \Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Image\AdapterFactory $imageFactory, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Cms\Model\Wysiwyg\Images\Storage\CollectionFactory $storageCollectionFactory, \Magento\MediaStorage\Model\File\Storage\FileFactory $storageFileFactory, \Magento\MediaStorage\Model\File\Storage\DatabaseFactory $storageDatabaseFactory, \Magento\MediaStorage\Model\File\Storage\Directory\DatabaseFactory $directoryDatabaseFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, array $resizeParameters = [], array $extensions = [], array $dirs = [], array $data = [], ?\Magento\Framework\Filesystem\DriverInterface $file = null, ?\Magento\Framework\Filesystem\Io\File $ioFile = null, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\File\Mime $mime = null, ?\Magento\Framework\App\Config\ScopeConfigInterface $coreConfig = null)
    {
        $this->___init();
        parent::__construct($session, $backendUrl, $cmsWysiwygImages, $coreFileStorageDb, $filesystem, $imageFactory, $assetRepo, $storageCollectionFactory, $storageFileFactory, $storageDatabaseFactory, $directoryDatabaseFactory, $uploaderFactory, $resizeParameters, $extensions, $dirs, $data, $file, $ioFile, $logger, $mime, $coreConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteDirectory($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteDirectory');
        return $pluginInfo ? $this->___callPlugins('deleteDirectory', func_get_args(), $pluginInfo) : parent::deleteDirectory($path);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteFile($target)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteFile');
        return $pluginInfo ? $this->___callPlugins('deleteFile', func_get_args(), $pluginInfo) : parent::deleteFile($target);
    }
}
