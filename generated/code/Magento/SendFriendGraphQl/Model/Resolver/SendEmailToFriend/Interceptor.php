<?php
namespace Magento\SendFriendGraphQl\Model\Resolver\SendEmailToFriend;

/**
 * Interceptor class for @see \Magento\SendFriendGraphQl\Model\Resolver\SendEmailToFriend
 */
class Interceptor extends \Magento\SendFriendGraphQl\Model\Resolver\SendEmailToFriend implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SendFriendGraphQl\Model\SendFriend\SendEmail $sendEmail, \Magento\SendFriend\Helper\Data $sendFriendHelper)
    {
        $this->___init();
        parent::__construct($sendEmail, $sendFriendHelper);
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
