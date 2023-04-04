<?php
namespace Magento\GiftMessageGraphQl\Model\Resolver\Order\GiftMessage;

/**
 * Interceptor class for @see \Magento\GiftMessageGraphQl\Model\Resolver\Order\GiftMessage
 */
class Interceptor extends \Magento\GiftMessageGraphQl\Model\Resolver\Order\GiftMessage implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\GiftMessage\Api\OrderRepositoryInterface $orderRepository, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\GraphQl\Query\Uid $uidEncoder = null)
    {
        $this->___init();
        parent::__construct($orderRepository, $logger, $uidEncoder);
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
