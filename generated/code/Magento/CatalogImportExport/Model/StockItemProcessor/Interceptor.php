<?php
namespace Magento\CatalogImportExport\Model\StockItemProcessor;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\StockItemProcessor
 */
class Interceptor extends \Magento\CatalogImportExport\Model\StockItemProcessor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogImportExport\Model\StockItemImporterInterface $stockItemImporter)
    {
        $this->___init();
        parent::__construct($stockItemImporter);
    }

    /**
     * {@inheritdoc}
     */
    public function process(array $stockData, array $importedData) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'process');
        $pluginInfo ? $this->___callPlugins('process', func_get_args(), $pluginInfo) : parent::process($stockData, $importedData);
    }
}
