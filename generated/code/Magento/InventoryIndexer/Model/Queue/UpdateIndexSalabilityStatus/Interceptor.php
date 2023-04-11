<?php
namespace Magento\InventoryIndexer\Model\Queue\UpdateIndexSalabilityStatus;

/**
 * Interceptor class for @see \Magento\InventoryIndexer\Model\Queue\UpdateIndexSalabilityStatus
 */
class Interceptor extends \Magento\InventoryIndexer\Model\Queue\UpdateIndexSalabilityStatus implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Api\DefaultStockProviderInterface $defaultStockProvider, \Magento\InventoryIndexer\Model\Queue\UpdateIndexSalabilityStatus\IndexProcessor $indexProcessor, \Magento\InventoryIndexer\Model\Queue\UpdateIndexSalabilityStatus\UpdateLegacyStock $updateLegacyStock, \Magento\InventoryCatalogApi\Model\GetParentSkusOfChildrenSkusInterface $getParentSkusByChildrenSkus)
    {
        $this->___init();
        parent::__construct($defaultStockProvider, $indexProcessor, $updateLegacyStock, $getParentSkusByChildrenSkus);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\InventoryIndexer\Model\Queue\ReservationData $reservationData) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($reservationData);
    }
}
