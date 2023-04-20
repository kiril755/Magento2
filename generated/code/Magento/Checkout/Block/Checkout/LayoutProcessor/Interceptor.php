<?php
namespace Magento\Checkout\Block\Checkout\LayoutProcessor;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Checkout\LayoutProcessor
 */
class Interceptor extends \Magento\Checkout\Block\Checkout\LayoutProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\AttributeMetadataDataProvider $attributeMetadataDataProvider, \Magento\Ui\Component\Form\AttributeMapper $attributeMapper, \Magento\Checkout\Block\Checkout\AttributeMerger $merger, \Magento\Customer\Model\Options $options, \Magento\Checkout\Helper\Data $checkoutDataHelper, \Magento\Shipping\Model\Config $shippingConfig, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($attributeMetadataDataProvider, $attributeMapper, $merger, $options, $checkoutDataHelper, $shippingConfig, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function process($jsLayout)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        return $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($jsLayout);
    }
}
