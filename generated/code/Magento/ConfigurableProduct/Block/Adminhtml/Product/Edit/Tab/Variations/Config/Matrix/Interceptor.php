<?php
namespace Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\Tab\Variations\Config\Matrix;

/**
 * Interceptor class for @see \Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\Tab\Variations\Config\Matrix
 */
class Interceptor extends \Magento\ConfigurableProduct\Block\Adminhtml\Product\Edit\Tab\Variations\Config\Matrix implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\ConfigurableProduct\Model\Product\Type\Configurable $configurableType, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\ConfigurableProduct\Model\Product\Type\VariationMatrix $variationMatrix, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Helper\Image $image, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, \Magento\Catalog\Model\Locator\LocatorInterface $locator, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $configurableType, $stockRegistry, $variationMatrix, $productRepository, $image, $localeCurrency, $locator, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductMatrix()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductMatrix');
        return $pluginInfo ? $this->___callPlugins('getProductMatrix', func_get_args(), $pluginInfo) : parent::getProductMatrix();
    }
}
