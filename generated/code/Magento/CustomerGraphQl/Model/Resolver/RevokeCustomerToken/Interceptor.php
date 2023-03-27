<?php
namespace Magento\CustomerGraphQl\Model\Resolver\RevokeCustomerToken;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\RevokeCustomerToken
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\RevokeCustomerToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Integration\Api\CustomerTokenServiceInterface $customerTokenService)
    {
        $this->___init();
        parent::__construct($customerTokenService);
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
