<?php
namespace Magento\VaultGraphQl\Model\Resolver\DeletePaymentToken;

/**
 * Interceptor class for @see \Magento\VaultGraphQl\Model\Resolver\DeletePaymentToken
 */
class Interceptor extends \Magento\VaultGraphQl\Model\Resolver\DeletePaymentToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Vault\Api\PaymentTokenManagementInterface $paymentTokenManagement, \Magento\Vault\Api\PaymentTokenRepositoryInterface $paymentTokenRepository)
    {
        $this->___init();
        parent::__construct($paymentTokenManagement, $paymentTokenRepository);
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
