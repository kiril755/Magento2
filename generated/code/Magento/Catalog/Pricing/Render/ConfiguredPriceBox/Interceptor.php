<?php
namespace Magento\Catalog\Pricing\Render\ConfiguredPriceBox;

/**
 * Interceptor class for @see \Magento\Catalog\Pricing\Render\ConfiguredPriceBox
 */
class Interceptor extends \Magento\Catalog\Pricing\Render\ConfiguredPriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\SaleableInterface $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, array $data = [], ?\Magento\Catalog\Model\Product\Pricing\Renderer\SalableResolverInterface $salableResolver = null, ?\Magento\Catalog\Pricing\Price\MinimalPriceCalculatorInterface $minimalPriceCalculator = null, ?\Magento\Catalog\Pricing\Price\ConfiguredPriceSelection $configuredPriceSelection = null)
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $data, $salableResolver, $minimalPriceCalculator, $configuredPriceSelection);
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
