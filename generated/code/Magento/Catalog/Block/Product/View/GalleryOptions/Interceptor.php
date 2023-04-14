<?php
namespace Magento\Catalog\Block\Product\View\GalleryOptions;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\View\GalleryOptions
 */
class Interceptor extends \Magento\Catalog\Block\Product\View\GalleryOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \Magento\Catalog\Block\Product\View\Gallery $gallery, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $jsonSerializer, $gallery, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getImage($product, $imageId, $attributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImage');
        return $pluginInfo ? $this->___callPlugins('getImage', func_get_args(), $pluginInfo) : parent::getImage($product, $imageId, $attributes);
    }
}
