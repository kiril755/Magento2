<?php
namespace Magento\CatalogInventory\Model\StockState;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockState
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockState implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogInventory\Model\Spi\StockStateProviderInterface $stockStateProvider, \Magento\CatalogInventory\Model\Spi\StockRegistryProviderInterface $stockRegistryProvider, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration)
    {
        $this->___init();
        parent::__construct($stockStateProvider, $stockRegistryProvider, $stockConfiguration);
    }

    /**
     * {@inheritdoc}
     */
    public function suggestQty($productId, $qty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'suggestQty');
        return $pluginInfo ? $this->___callPlugins('suggestQty', func_get_args(), $pluginInfo) : parent::suggestQty($productId, $qty, $scopeId);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQuoteItemQty');
        return $pluginInfo ? $this->___callPlugins('checkQuoteItemQty', func_get_args(), $pluginInfo) : parent::checkQuoteItemQty($productId, $itemQty, $qtyToCheck, $origQty, $scopeId);
    }
}
