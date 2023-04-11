<?php
namespace Magento\MediaGalleryUi\Ui\Component\Listing\Columns\Source\Options;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Ui\Component\Listing\Columns\Source\Options
 */
class Interceptor extends \Magento\MediaGalleryUi\Ui\Component\Listing\Columns\Source\Options implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
