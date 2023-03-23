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
    public function init()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'init');
        return $pluginInfo ? $this->___callPlugins('init', func_get_args(), $pluginInfo) : parent::init();
    }

    /**
     * {@inheritdoc}
     */
    public function move($fileName, $renameFileOff = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'move');
        return $pluginInfo ? $this->___callPlugins('move', func_get_args(), $pluginInfo) : parent::move($fileName, $renameFileOff);
    }

    /**
     * {@inheritdoc}
     */
    public function getTmpDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTmpDir');
        return $pluginInfo ? $this->___callPlugins('getTmpDir', func_get_args(), $pluginInfo) : parent::getTmpDir();
    }

    /**
     * {@inheritdoc}
     */
    public function setTmpDir($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTmpDir');
        return $pluginInfo ? $this->___callPlugins('setTmpDir', func_get_args(), $pluginInfo) : parent::setTmpDir($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDestDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDestDir');
        return $pluginInfo ? $this->___callPlugins('getDestDir', func_get_args(), $pluginInfo) : parent::getDestDir();
    }

    /**
     * {@inheritdoc}
     */
    public function setDestDir($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDestDir');
        return $pluginInfo ? $this->___callPlugins('setDestDir', func_get_args(), $pluginInfo) : parent::setDestDir($path);
    }

    /**
     * {@inheritdoc}
     */
    public function skipDbProcessing($flag = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'skipDbProcessing');
        return $pluginInfo ? $this->___callPlugins('skipDbProcessing', func_get_args(), $pluginInfo) : parent::skipDbProcessing($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function checkAllowedExtension($extension)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkAllowedExtension');
        return $pluginInfo ? $this->___callPlugins('checkAllowedExtension', func_get_args(), $pluginInfo) : parent::checkAllowedExtension($extension);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileSize()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileSize');
        return $pluginInfo ? $this->___callPlugins('getFileSize', func_get_args(), $pluginInfo) : parent::getFileSize();
    }

    /**
     * {@inheritdoc}
     */
    public function validateFile()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateFile');
        return $pluginInfo ? $this->___callPlugins('validateFile', func_get_args(), $pluginInfo) : parent::validateFile();
    }

    /**
     * {@inheritdoc}
     */
    public function renameFile(string $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'renameFile');
        return $pluginInfo ? $this->___callPlugins('renameFile', func_get_args(), $pluginInfo) : parent::renameFile($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function save($destinationFolder, $newFileName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($destinationFolder, $newFileName);
    }

    /**
     * {@inheritdoc}
     */
    public function getFileExtension()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFileExtension');
        return $pluginInfo ? $this->___callPlugins('getFileExtension', func_get_args(), $pluginInfo) : parent::getFileExtension();
    }

    /**
     * {@inheritdoc}
     */
    public function addValidateCallback($callbackName, $callbackObject, $callbackMethod)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addValidateCallback');
        return $pluginInfo ? $this->___callPlugins('addValidateCallback', func_get_args(), $pluginInfo) : parent::addValidateCallback($callbackName, $callbackObject, $callbackMethod);
    }

    /**
     * {@inheritdoc}
     */
    public function removeValidateCallback($callbackName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeValidateCallback');
        return $pluginInfo ? $this->___callPlugins('removeValidateCallback', func_get_args(), $pluginInfo) : parent::removeValidateCallback($callbackName);
    }

    /**
     * {@inheritdoc}
     */
    public function correctFileNameCase($fileName)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'correctFileNameCase');
        return $pluginInfo ? $this->___callPlugins('correctFileNameCase', func_get_args(), $pluginInfo) : parent::correctFileNameCase($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function checkMimeType($validTypes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkMimeType');
        return $pluginInfo ? $this->___callPlugins('checkMimeType', func_get_args(), $pluginInfo) : parent::checkMimeType($validTypes);
    }

    /**
     * {@inheritdoc}
     */
    public function getUploadedFileName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUploadedFileName');
        return $pluginInfo ? $this->___callPlugins('getUploadedFileName', func_get_args(), $pluginInfo) : parent::getUploadedFileName();
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowCreateFolders($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowCreateFolders');
        return $pluginInfo ? $this->___callPlugins('setAllowCreateFolders', func_get_args(), $pluginInfo) : parent::setAllowCreateFolders($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowRenameFiles($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowRenameFiles');
        return $pluginInfo ? $this->___callPlugins('setAllowRenameFiles', func_get_args(), $pluginInfo) : parent::setAllowRenameFiles($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFilesDispersion($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilesDispersion');
        return $pluginInfo ? $this->___callPlugins('setFilesDispersion', func_get_args(), $pluginInfo) : parent::setFilesDispersion($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setFilenamesCaseSensitivity($flag)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setFilenamesCaseSensitivity');
        return $pluginInfo ? $this->___callPlugins('setFilenamesCaseSensitivity', func_get_args(), $pluginInfo) : parent::setFilenamesCaseSensitivity($flag);
    }

    /**
     * {@inheritdoc}
     */
    public function setAllowedExtensions($extensions = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAllowedExtensions');
        return $pluginInfo ? $this->___callPlugins('setAllowedExtensions', func_get_args(), $pluginInfo) : parent::setAllowedExtensions($extensions);
    }
}
