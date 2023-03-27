<?php
namespace Magento\Catalog\Block\Product\ProductList\Crosssell;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Product\ProductList\Crosssell
 */
class Interceptor extends \Magento\Catalog\Block\Product\ProductList\Crosssell implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $data);
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
