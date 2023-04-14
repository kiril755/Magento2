<?php
namespace Magento\ConfigurableProduct\Pricing\Render\FinalPriceBox;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Pricing\Render\FinalPriceBox
 */
class Interceptor extends \Magento\ConfigurableProduct\Pricing\Render\FinalPriceBox implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Pricing\SaleableInterface $saleableItem, \Magento\Framework\Pricing\Price\PriceInterface $price, \Magento\Framework\Pricing\Render\RendererPool $rendererPool, \Magento\Catalog\Model\Product\Pricing\Renderer\SalableResolverInterface $salableResolver, \Magento\Catalog\Pricing\Price\MinimalPriceCalculatorInterface $minimalPriceCalculator, \Magento\ConfigurableProduct\Pricing\Price\ConfigurableOptionsProviderInterface $configurableOptionsProvider, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $saleableItem, $price, $rendererPool, $salableResolver, $minimalPriceCalculator, $configurableOptionsProvider, $data);
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
