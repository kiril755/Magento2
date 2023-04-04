<?php
namespace Magento\MediaGalleryMetadata\Model\IptcEmbed;

/**
 * Interceptor class for @see \Magento\MediaGalleryMetadata\Model\IptcEmbed
 */
class Interceptor extends \Magento\MediaGalleryMetadata\Model\IptcEmbed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $iptcData, string $filePath)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($iptcData, $filePath);
    }
}
