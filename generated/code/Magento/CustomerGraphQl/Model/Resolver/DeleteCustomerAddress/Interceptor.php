<?php
namespace Magento\CustomerGraphQl\Model\Resolver\DeleteCustomerAddress;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\DeleteCustomerAddress
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\DeleteCustomerAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\Address\GetCustomerAddress $getCustomerAddress, \Magento\CustomerGraphQl\Model\Customer\Address\DeleteCustomerAddress $deleteCustomerAddress)
    {
        $this->___init();
        parent::__construct($getCustomerAddress, $deleteCustomerAddress);
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
