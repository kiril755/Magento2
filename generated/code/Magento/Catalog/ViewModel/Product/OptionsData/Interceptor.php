<?php
namespace Magento\Catalog\ViewModel\Product\OptionsData;

/**
 * Interceptor class for @see \Magento\Catalog\ViewModel\Product\OptionsData
 */
class Interceptor extends \Magento\Catalog\ViewModel\Product\OptionsData implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionsData(\Magento\Catalog\Model\Product $product) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionsData');
        return $pluginInfo ? $this->___callPlugins('getOptionsData', func_get_args(), $pluginInfo) : parent::getOptionsData($product);
    }
}
