<?php
namespace Magento\WishlistGraphQl\Model\Resolver\CustomerWishlists;

/**
 * Interceptor class for @see \Magento\WishlistGraphQl\Model\Resolver\CustomerWishlists
 */
class Interceptor extends \Magento\WishlistGraphQl\Model\Resolver\CustomerWishlists implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\WishlistGraphQl\Mapper\WishlistDataMapper $wishlistDataMapper, \Magento\Wishlist\Model\Wishlist\Config $wishlistConfig, \Magento\Wishlist\Model\ResourceModel\Wishlist\CollectionFactory $wishlistCollectionFactory, ?\Magento\Wishlist\Model\WishlistFactory $wishlistFactory = null)
    {
        $this->___init();
        parent::__construct($wishlistDataMapper, $wishlistConfig, $wishlistCollectionFactory, $wishlistFactory);
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
