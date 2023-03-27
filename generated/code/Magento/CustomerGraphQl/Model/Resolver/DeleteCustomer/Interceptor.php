<?php
namespace Magento\CustomerGraphQl\Model\Resolver\DeleteCustomer;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\DeleteCustomer
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\DeleteCustomer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\CustomerGraphQl\Model\Customer\DeleteCustomer $deleteCustomer, \Magento\Framework\Registry $registry)
    {
        $this->___init();
        parent::__construct($getCustomer, $deleteCustomer, $registry);
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
