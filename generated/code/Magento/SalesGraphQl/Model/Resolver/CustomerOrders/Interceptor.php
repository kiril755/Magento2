<?php
namespace Magento\SalesGraphQl\Model\Resolver\CustomerOrders;

/**
 * Interceptor class for @see \Magento\SalesGraphQl\Model\Resolver\CustomerOrders
 */
class Interceptor extends \Magento\SalesGraphQl\Model\Resolver\CustomerOrders implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\SalesGraphQl\Model\Resolver\CustomerOrders\Query\OrderFilter $orderFilter, \Magento\SalesGraphQl\Model\Formatter\Order $orderFormatter, \Magento\SalesGraphQl\Model\Resolver\CustomerOrders\Query\OrderSort $orderSort, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($orderRepository, $searchCriteriaBuilder, $orderFilter, $orderFormatter, $orderSort, $storeManager);
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
