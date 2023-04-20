<?php
namespace Magento\Framework\File\Uploader;

/**
 * Interceptor class for @see \Magento\Framework\File\Uploader
 */
class Interceptor extends \Magento\Framework\File\Uploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($fileId, ?\Magento\Framework\File\Mime $fileMime = null, ?\Magento\Framework\App\Filesystem\DirectoryList $directoryList = null, ?\Magento\Framework\Filesystem\DriverPool $driverPool = null, ?\Magento\Framework\Filesystem\Directory\TargetDirectory $targetDirectory = null, ?\Magento\Framework\Filesystem $filesystem = null)
    {
        $this->___init();
        parent::__construct($fileId, $fileMime, $directoryList, $driverPool, $targetDirectory, $filesystem);
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
