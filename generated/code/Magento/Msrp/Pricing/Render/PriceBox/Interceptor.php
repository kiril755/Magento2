<?php
namespace Magento\Msrp\Pricing\Render\PriceBox;

/**
 * Interceptor class for @see \Magento\Msrp\Pricing\Render\PriceBox
 */
class Interceptor extends \Magento\Msrp\Pricing\Render\PriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Model\Product $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\Framework\Math\Random $mathRandom, \Magento\Msrp\Pricing\MsrpPriceCalculatorInterface $msrpPriceCalculator)
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $jsonHelper, $mathRandom, $msrpPriceCalculator);
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKey()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKey');
        return $pluginInfo ? $this->___callPlugins('getCacheKey', func_get_args(), $pluginInfo) : parent::getCacheKey();
    }
}
