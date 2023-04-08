<?php
namespace Magento\InventorySales\Model\PlaceReservationsForSalesEvent;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\PlaceReservationsForSalesEvent
 */
class Interceptor extends \Magento\InventorySales\Model\PlaceReservationsForSalesEvent implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryReservationsApi\Model\ReservationBuilderInterface $reservationBuilder, \Magento\InventoryReservationsApi\Model\AppendReservationsInterface $appendReservations, \Magento\InventorySalesApi\Api\GetStockBySalesChannelInterface $getStockBySalesChannel, \Magento\InventoryCatalogApi\Model\GetProductTypesBySkusInterface $getProductTypesBySkus, \Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForProductTypeInterface $isSourceItemManagementAllowedForProductType, \Magento\Framework\Serialize\SerializerInterface $serializer, \Magento\InventorySales\Model\SalesEventToArrayConverter $salesEventToArrayConverter)
    {
        $this->___init();
        parent::__construct($reservationBuilder, $appendReservations, $getStockBySalesChannel, $getProductTypesBySkus, $isSourceItemManagementAllowedForProductType, $serializer, $salesEventToArrayConverter);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $items, \Magento\InventorySalesApi\Api\Data\SalesChannelInterface $salesChannel, \Magento\InventorySalesApi\Api\Data\SalesEventInterface $salesEvent) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($items, $salesChannel, $salesEvent);
    }
}
