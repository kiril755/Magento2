<?php
namespace Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped
 */
class Interceptor extends \Magento\GroupedProduct\Block\Adminhtml\Product\Composite\Fieldset\Grouped implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Pricing\Helper\Data $pricingHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $arrayUtils, $pricingHelper, $data);
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
