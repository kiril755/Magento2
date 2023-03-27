<?php
namespace Magento\QuoteGraphQl\Model\Resolver\UpdateCartItems;

/**
 * Interceptor class for @see \Magento\QuoteGraphQl\Model\Resolver\UpdateCartItems
 */
class Interceptor extends \Magento\QuoteGraphQl\Model\Resolver\UpdateCartItems implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Quote\Api\CartRepositoryInterface $cartRepository, \Magento\QuoteGraphQl\Model\CartItem\DataProvider\UpdateCartItems $updateCartItems, \Magento\Framework\GraphQl\Query\Resolver\ArgumentsProcessorInterface $argsSelection)
    {
        $this->___init();
        parent::__construct($getCartForUser, $cartRepository, $updateCartItems, $argsSelection);
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
