<?php
namespace Magento\WishlistGraphQl\Model\Resolver\RemoveProductsFromWishlist;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\RemoveProductsFromWishlist
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\RemoveProductsFromWishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\Wishlist\Model\ResourceModel\Wishlist $wishlistResource, \Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper, \Magento\Wishlist\Model\Wishlist\RemoveProductsFromWishlist $removeProductsFromWishlist)
    {
        $this->___init();
        parent::__construct($wishlistFactory, $wishlistResource, $wishlistConfig, $wishlistDataMapper, $removeProductsFromWishlist);
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
