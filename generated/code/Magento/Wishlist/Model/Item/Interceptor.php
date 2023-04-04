<?php
namespace Magento\Wishlist\Model\Item;

/**
 * Interceptor class for @see \Magento\Wishlist\Model\Item
 */
class Interceptor extends \Magento\Wishlist\Model\Item implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Stdlib\DateTime\DateTime $date, \Magento\Catalog\Model\ResourceModel\Url $catalogUrl, \Magento\Wishlist\Model\Item\OptionFactory $wishlistOptFactory, \Magento\Wishlist\Model\ResourceModel\Item\Option\CollectionFactory $wishlOptionCollectionFactory, \Magento\Catalog\Model\ProductTypes\ConfigInterface $productTypeConfig, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $date, $catalogUrl, $wishlistOptFactory, $wishlOptionCollectionFactory, $productTypeConfig, $productRepository, $resource, $resourceCollection, $data, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function representProduct($product)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'representProduct');
        return $pluginInfo ? $this->___callPlugins('representProduct', func_get_args(), $pluginInfo) : parent::representProduct($product);
    }

    /**
     * {@inheritdoc}
     */
    public function compareOptions($options1, $options2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'compareOptions');
        return $pluginInfo ? $this->___callPlugins('compareOptions', func_get_args(), $pluginInfo) : parent::compareOptions($options1, $options2);
    }
}
