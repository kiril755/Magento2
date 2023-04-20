<?php
namespace Magento\CustomerGraphQl\Model\Resolver\ChangePassword;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\ChangePassword
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\ChangePassword implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\CustomerGraphQl\Model\Customer\GetCustomer $getCustomer, \Magento\CustomerGraphQl\Model\Customer\CheckCustomerPassword $checkCustomerPassword, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\CustomerGraphQl\Model\Customer\ExtractCustomerData $extractCustomerData)
    {
        $this->___init();
        parent::__construct($getCustomer, $checkCustomerPassword, $accountManagement, $extractCustomerData);
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
