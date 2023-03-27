<?php
namespace Magento\CustomerGraphQl\Model\Resolver\IsEmailAvailable;

/**
 * Interceptor class for @see \Magento\CustomerGraphQl\Model\Resolver\IsEmailAvailable
 */
class Interceptor extends \Magento\CustomerGraphQl\Model\Resolver\IsEmailAvailable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Framework\Validator\EmailAddress $emailValidator)
    {
        $this->___init();
        parent::__construct($accountManagement, $emailValidator);
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
