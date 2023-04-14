<?php
namespace Magento\InventoryInStorePickup\Model\PickupLocation\Mapper\PreProcessor\FrontendDescription\Filter;

/**
 * Interceptor class for @see \Magento\InventoryInStorePickup\Model\PickupLocation\Mapper\PreProcessor\FrontendDescription\Filter
 */
class Interceptor extends \Magento\InventoryInStorePickup\Model\PickupLocation\Mapper\PreProcessor\FrontendDescription\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\UrlInterface $url, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Framework\Filter\VariableResolverInterface $variableResolver, $variables = [], $directiveProcessors = [])
    {
        $this->___init();
        parent::__construct($url, $string, $variableResolver, $variables, $directiveProcessors);
    }

    /**
     * {@inheritdoc}
     */
    public function filter($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'filter');
        return $pluginInfo ? $this->___callPlugins('filter', func_get_args(), $pluginInfo) : parent::filter($value);
    }
}
