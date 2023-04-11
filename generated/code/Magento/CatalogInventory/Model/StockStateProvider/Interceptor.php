<?php
namespace Magento\CatalogInventory\Model\StockStateProvider;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\StockStateProvider
 */
class Interceptor extends \Magento\CatalogInventory\Model\StockStateProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Math\Division $mathDivision, \Magento\Framework\Locale\FormatInterface $localeFormat, \Magento\Framework\DataObject\Factory $objectFactory, \Magento\Catalog\Model\ProductFactory $productFactory, $qtyCheckApplicable = true)
    {
        $this->___init();
        parent::__construct($mathDivision, $localeFormat, $objectFactory, $productFactory, $qtyCheckApplicable);
    }

    /**
     * {@inheritdoc}
     */
    public function verifyStock(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'verifyStock');
        return $pluginInfo ? $this->___callPlugins('verifyStock', func_get_args(), $pluginInfo) : parent::verifyStock($stockItem);
    }

    /**
     * {@inheritdoc}
     */
    public function checkQuoteItemQty(\Magento\CatalogInventory\Api\Data\StockItemInterface $stockItem, $qty, $summaryQty, $origQty = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'checkQuoteItemQty');
        return $pluginInfo ? $this->___callPlugins('checkQuoteItemQty', func_get_args(), $pluginInfo) : parent::checkQuoteItemQty($stockItem, $qty, $summaryQty, $origQty);
    }
}
