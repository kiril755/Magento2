<?php
namespace Magento\InventorySales\Model\GetSalableQty;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetSalableQty
 */
class Interceptor extends \Magento\InventorySales\Model\GetSalableQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryConfigurationApi\Api\GetStockItemConfigurationInterface $getStockItemConfig, \Magento\InventoryReservationsApi\Model\GetReservationsQuantityInterface $getReservationsQuantity, \Magento\InventorySales\Model\GetProductAvailableQty $getProductAvailableQty)
    {
        $this->___init();
        parent::__construct($getStockItemConfig, $getReservationsQuantity, $getProductAvailableQty);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : float
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
