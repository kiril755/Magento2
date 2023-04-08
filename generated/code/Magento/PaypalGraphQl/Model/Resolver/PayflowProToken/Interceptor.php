<?php
namespace Magento\PaypalGraphQl\Model\Resolver\PayflowProToken;

/**
 * Interceptor class for @see \Magento\PaypalGraphQl\Model\Resolver\PayflowProToken
 */
class Interceptor extends \Magento\PaypalGraphQl\Model\Resolver\PayflowProToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\QuoteGraphQl\Model\Cart\GetCartForUser $getCartForUser, \Magento\Paypal\Model\Payflow\Service\Request\SecureToken $secureTokenService, \Magento\PaypalGraphQl\Model\Resolver\Store\Url $urlService)
    {
        $this->___init();
        parent::__construct($getCartForUser, $secureTokenService, $urlService);
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
