<?php
namespace Magento\MediaGallerySynchronization\Model\Filesystem\GetFileInfo;

/**
 * Interceptor class for @see \Magento\MediaGallerySynchronization\Model\Filesystem\GetFileInfo
 */
class Interceptor extends \Magento\MediaGallerySynchronization\Model\Filesystem\GetFileInfo implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaGallerySynchronization\Model\Filesystem\FileInfoFactory $fileInfoFactory)
    {
        $this->___init();
        parent::__construct($fileInfoFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $path) : \Magento\MediaGallerySynchronization\Model\Filesystem\FileInfo
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($path);
    }
}
