<?php
namespace Magento\Checkout\Block\Cart\Crosssell;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Crosssell
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Crosssell implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Block\Product\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Catalog\Model\Product\Visibility $productVisibility, \Magento\Catalog\Model\Product\LinkFactory $productLinkFactory, \Magento\Quote\Model\Quote\Item\RelatedProducts $itemRelationsList, \Magento\CatalogInventory\Helper\Stock $stockHelper, array $data = [], ?\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory = null, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null)
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $productVisibility, $productLinkFactory, $itemRelationsList, $stockHelper, $data, $productCollectionFactory, $productRepository);
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
