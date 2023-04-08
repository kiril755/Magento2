<?php
namespace Magento\NewsletterGraphQl\Model\Resolver\SubscribeEmailToNewsletter;

/**
 * Interceptor class for @see \Magento\NewsletterGraphQl\Model\Resolver\SubscribeEmailToNewsletter
 */
class Interceptor extends \Magento\NewsletterGraphQl\Model\Resolver\SubscribeEmailToNewsletter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\GraphQl\Query\EnumLookup $enumLookup, \Psr\Log\LoggerInterface $logger, \Magento\Newsletter\Model\SubscriptionManagerInterface $subscriptionManager, \Magento\NewsletterGraphQl\Model\SubscribeEmailToNewsletter\Validation $validator)
    {
        $this->___init();
        parent::__construct($customerRepository, $enumLookup, $logger, $subscriptionManager, $validator);
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
