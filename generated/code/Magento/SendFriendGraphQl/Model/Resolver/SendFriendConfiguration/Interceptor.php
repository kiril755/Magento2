<?php
namespace Magento\SendFriendGraphQl\Model\Resolver\SendFriendConfiguration;

/**
 * Interceptor class for @see \Magento\SendFriendGraphQl\Model\Resolver\SendFriendConfiguration
 */
class Interceptor extends \Magento\SendFriendGraphQl\Model\Resolver\SendFriendConfiguration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SendFriend\Helper\Data $sendFriendHelper)
    {
        $this->___init();
        parent::__construct($sendFriendHelper);
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
