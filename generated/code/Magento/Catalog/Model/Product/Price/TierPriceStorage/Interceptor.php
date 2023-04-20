<?php
namespace Magento\Catalog\Model\Product\Price\TierPriceStorage;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Price\TierPriceStorage
 */
class Interceptor extends \Magento\Catalog\Model\Product\Price\TierPriceStorage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Product\Price\TierPricePersistence $tierPricePersistence, \Magento\Catalog\Model\Product\Price\Validation\TierPriceValidator $tierPriceValidator, \Magento\Catalog\Model\Product\Price\TierPriceFactory $tierPriceFactory, \Magento\Catalog\Model\Indexer\Product\Price\Processor $priceIndexProcessor, \Magento\Catalog\Model\ProductIdLocatorInterface $productIdLocator, \Magento\Customer\Model\ResourceModel\Group\GetCustomerGroupCodesByIds $getCustomerGroupCodesByIds)
    {
        $this->___init();
        parent::__construct($tierPricePersistence, $tierPriceValidator, $tierPriceFactory, $priceIndexProcessor, $productIdLocator, $getCustomerGroupCodesByIds);
    }

    /**
     * {@inheritdoc}
     */
    public function update(array $prices)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'update');
        return $pluginInfo ? $this->___callPlugins('update', func_get_args(), $pluginInfo) : parent::update($prices);
    }
}
