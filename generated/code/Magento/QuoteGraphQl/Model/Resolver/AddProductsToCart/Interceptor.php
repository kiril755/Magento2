<?php
namespace Magento\QuoteGraphQl\Model\Resolver\AddProductsToCart;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\AddProductsToCart
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\AddProductsToCart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Quote\Model\Cart\AddProductsToCart $addProductsToCart, \Magento\QuoteGraphQl\Model\CartItem\DataProvider\Processor\ItemDataProcessorInterface $itemDataProcessor, \Magento\Quote\Model\QuoteMutexInterface $quoteMutex, ?\Magento\QuoteGraphQl\Model\CartItem\PrecursorInterface $cartItemPrecursor = null)
    {
        $this->___init();
        parent::__construct($getCartForUser, $addProductsToCart, $itemDataProcessor, $quoteMutex, $cartItemPrecursor);
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
