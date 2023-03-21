<?php
namespace Magento\MediaGalleryMetadata\Model\ExifReader;

/**
 * Interceptor class for @see \Magento\MediaGalleryMetadata\Model\ExifReader
 */
class Interceptor extends \Magento\MediaGalleryMetadata\Model\ExifReader implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($filePath);
    }
}
