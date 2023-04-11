<?php
namespace Magento\CustomerGraphQl\Model\Resolver\RequestPasswordResetEmail;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\RequestPasswordResetEmail
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\RequestPasswordResetEmail implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\AuthenticationInterface $authentication, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Framework\Validator\EmailAddress $emailValidator)
    {
        $this->___init();
        parent::__construct($authentication, $customerRepository, $customerAccountManagement, $emailValidator);
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
