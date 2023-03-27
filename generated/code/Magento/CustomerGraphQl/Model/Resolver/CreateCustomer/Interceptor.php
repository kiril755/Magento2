<?php
namespace Magento\CustomerGraphQl\Model\Resolver\CreateCustomer;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\CreateCustomer
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\CreateCustomer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData $extractCustomerData, \Magento\CustomerGraphQl\Model\Customer\CreateCustomerAccount $createCustomerAccount, \Magento\Newsletter\Model\Config $newsLetterConfig)
    {
        $this->___init();
        parent::__construct($extractCustomerData, $createCustomerAccount, $newsLetterConfig);
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
