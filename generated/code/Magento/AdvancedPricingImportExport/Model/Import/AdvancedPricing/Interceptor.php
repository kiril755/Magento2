<?php
namespace Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing;

/**
 * Interceptor class for @see \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing
 */
class Interceptor extends \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\ImportExport\Helper\Data $importExportData, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModelFactory $resourceFactory, \Magento\Catalog\Model\Product $productModel, \Magento\Catalog\Helper\Data $catalogData, \Magento\CatalogImportExport\Model\Import\Product\StoreResolver $storeResolver, \Magento\CatalogImportExport\Model\Import\Product $importProduct, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator $validator, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator\Website $websiteValidator, \Magento\AdvancedPricingImportExport\Model\Import\AdvancedPricing\Validator\TierPrice $tierPriceValidator, ?\Magento\AdvancedPricingImportExport\Model\CurrencyResolver $currencyResolver = null)
    {
        $this->___init();
        parent::__construct($jsonHelper, $importExportData, $importData, $resource, $resourceHelper, $errorAggregator, $dateTime, $resourceFactory, $productModel, $catalogData, $storeResolver, $importProduct, $validator, $websiteValidator, $tierPriceValidator, $currencyResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function saveAdvancedPricing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveAdvancedPricing');
        return $pluginInfo ? $this->___callPlugins('saveAdvancedPricing', func_get_args(), $pluginInfo) : parent::saveAdvancedPricing();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteAdvancedPricing()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteAdvancedPricing');
        return $pluginInfo ? $this->___callPlugins('deleteAdvancedPricing', func_get_args(), $pluginInfo) : parent::deleteAdvancedPricing();
    }
}
