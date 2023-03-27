<?php
namespace Magento\InventorySales\Model\GetSkuFromOrderItem;

/**
 * Interceptor class for @see \Magento\InventorySales\Model\GetSkuFromOrderItem
 */
class Interceptor extends \Magento\InventorySales\Model\GetSkuFromOrderItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryCatalogApi\Model\GetSkusByProductIdsInterface $getSkusByProductIds, \Magento\InventoryConfigurationApi\Model\IsSourceItemManagementAllowedForProductTypeInterface $isSourceItemManagementAllowedForProductType)
    {
        $this->___init();
        parent::__construct($getSkusByProductIds, $isSourceItemManagementAllowedForProductType);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Sales\Api\Data\OrderItemInterface $orderItem) : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($orderItem);
    }
}
