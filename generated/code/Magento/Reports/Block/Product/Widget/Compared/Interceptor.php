<?php
namespace Magento\Reports\Block\Product\Widget\Compared;

/**
 * Interceptor class for @see \Magento\Reports\Block\Product\Widget\Compared
 */
class Interceptor extends \Magento\Reports\Block\Product\Widget\Compared implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Catalog\Model\Product\Visibility $productVisibility, \Magento\Reports\Model\Product\Index\Factory $indexFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $productVisibility, $indexFactory, $data);
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
