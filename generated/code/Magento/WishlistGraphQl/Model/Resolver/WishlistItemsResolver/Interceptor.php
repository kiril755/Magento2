<?php
namespace Magento\WishlistGraphQl\Model\Resolver\WishlistItemsResolver;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\WishlistItemsResolver
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\WishlistItemsResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\ResourceModel\Item\CollectionFactory $wishlistItemCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($wishlistItemCollectionFactory, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
