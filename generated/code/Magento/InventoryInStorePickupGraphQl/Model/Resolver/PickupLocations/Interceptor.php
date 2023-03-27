<?php
namespace Magento\InventoryInStorePickupGraphQl\Model\Resolver\PickupLocations;

/**
 * Interceptor class for @see \Magento\InventoryInStorePickupGraphQl\Model\Resolver\PickupLocations
 */
class Interceptor extends \Magento\InventoryInStorePickupGraphQl\Model\Resolver\PickupLocations implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryInStorePickupGraphQl\Model\Resolver\PickupLocations\SearchRequestBuilder $searchRequestBuilderResolver, \Magento\InventoryInStorePickupApi\Api\GetPickupLocationsInterface $getPickupLocations, \Magento\InventoryInStorePickupGraphQl\Model\Resolver\DataProvider\PickupLocation $dataProvider, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($searchRequestBuilderResolver, $getPickupLocations, $dataProvider, $storeManager);
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
