<?php
namespace Magento\ConfigurableProduct\Model\Product\Configuration\Item\ItemProductResolver;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Model\Product\Configuration\Item\ItemProductResolver
 */
class Interceptor extends \Magento\ConfigurableProduct\Model\Product\Configuration\Item\ItemProductResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig)
    {
        $this->___init();
        parent::__construct($scopeConfig);
    }

    /**
     * {@inheritdoc}
     */
    public function getFinalProduct(\Magento\Catalog\Model\Product\Configuration\Item\ItemInterface $item) : \Magento\Catalog\Api\Data\ProductInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFinalProduct');
        return $pluginInfo ? $this->___callPlugins('getFinalProduct', func_get_args(), $pluginInfo) : parent::getFinalProduct($item);
    }
}
