<?php
namespace Magento\LoginAsCustomerGraphQl\Model\Resolver\RequestCustomerToken;

/**
 * Interceptor class for @see \Magento\LoginAsCustomerGraphQl\Model\Resolver\RequestCustomerToken
 */
class Interceptor extends \Magento\LoginAsCustomerGraphQl\Model\Resolver\RequestCustomerToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\AuthorizationInterface $authorization, \Magento\LoginAsCustomerApi\Api\ConfigInterface $config, \Magento\LoginAsCustomerGraphQl\Model\LoginAsCustomer\CreateCustomerToken $createCustomerToken)
    {
        $this->___init();
        parent::__construct($authorization, $config, $createCustomerToken);
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
