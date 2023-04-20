<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Layer\DataProvider\Filters;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Layer\DataProvider\Filters
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Layer\DataProvider\Filters implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CatalogGraphQl\Model\Resolver\Layer\FiltersProvider $filtersProvider)
    {
        $this->___init();
        parent::__construct($filtersProvider);
    }

    /**
     * {@inheritdoc}
     */
    public function getData(string $layerType, ?array $attributesToFilter = null) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($layerType, $attributesToFilter);
    }
}
