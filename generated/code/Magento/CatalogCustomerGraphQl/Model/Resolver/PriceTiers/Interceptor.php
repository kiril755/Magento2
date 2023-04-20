<?php
namespace Magento\CatalogCustomerGraphQl\Model\Resolver\PriceTiers;

/**
 * Interceptor class for @see \Magento\CatalogCustomerGraphQl\Model\Resolver\PriceTiers
 */
class Interceptor extends \Magento\CatalogCustomerGraphQl\Model\Resolver\PriceTiers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Resolver\ValueFactory $valueFactory, \Magento\CatalogCustomerGraphQl\Model\Resolver\Product\Price\TiersFactory $tiersFactory, \Magento\CatalogCustomerGraphQl\Model\Resolver\Customer\GetCustomerGroup $getCustomerGroup, \Magento\CatalogGraphQl\Model\Resolver\Product\Price\Discount $discount, \Magento\CatalogGraphQl\Model\Resolver\Product\Price\ProviderPool $priceProviderPool, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency)
    {
        $this->___init();
        parent::__construct($valueFactory, $tiersFactory, $getCustomerGroup, $discount, $priceProviderPool, $priceCurrency);
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
