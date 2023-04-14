<?php
namespace Magento\Downloadable\Model\File\ContentUploader;

/**
 * Interceptor class for @see \Magento\Downloadable\Model\File\ContentUploader
 */
class Interceptor extends \Magento\Downloadable\Model\File\ContentUploader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaStorage\Helper\File\Storage\Database $coreFileStorageDb, \Magento\MediaStorage\Helper\File\Storage $coreFileStorage, \Magento\MediaStorage\Model\File\Validator\NotProtectedExtension $validator, \Magento\Framework\Filesystem $filesystem, \Magento\Downloadable\Model\Link $linkConfig, \Magento\Downloadable\Model\Sample $sampleConfig)
    {
        $this->___init();
        parent::__construct($coreFileStorageDb, $coreFileStorage, $validator, $filesystem, $linkConfig, $sampleConfig);
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
