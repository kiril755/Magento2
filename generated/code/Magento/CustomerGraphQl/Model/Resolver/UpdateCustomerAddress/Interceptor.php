<?php
namespace Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddress;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddress
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\UpdateCustomerAddress implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\Address\GetCustomerAddress $getCustomerAddress, \Magento\CustomerGraphQl\Model\Customer\Address\UpdateCustomerAddress $updateCustomerAddress, \Magento\CustomerGraphQl\Model\Customer\Address\ExtractCustomerAddressData $extractCustomerAddressData)
    {
        $this->___init();
        parent::__construct($getCustomerAddress, $updateCustomerAddress, $extractCustomerAddressData);
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
