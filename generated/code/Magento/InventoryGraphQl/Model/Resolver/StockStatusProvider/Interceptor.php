<?php
namespace Magento\InventoryGraphQl\Model\Resolver\StockStatusProvider;

/**
 * Interceptor class for @see \Magento\InventoryGraphQl\Model\Resolver\StockStatusProvider
 */
class Interceptor extends \Magento\InventoryGraphQl\Model\Resolver\StockStatusProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalog\Model\GetStockIdForCurrentWebsite $getStockIdForCurrentWebsite, \Magento\InventorySalesApi\Api\AreProductsSalableInterface $areProductsSalable)
    {
        $this->___init();
        parent::__construct($getStockIdForCurrentWebsite, $areProductsSalable);
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
