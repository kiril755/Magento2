<?php
namespace Magento\Sales\Model\Service\OrderService;

/**
 * Interceptor class for @see \Magento\Sales\Model\Service\OrderService
 */
class Interceptor extends \Magento\Sales\Model\Service\OrderService implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Api\OrderStatusHistoryRepositoryInterface $historyRepository, \Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Sales\Model\OrderNotifier $notifier, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Sales\Model\Order\Email\Sender\OrderCommentSender $orderCommentSender, \Magento\Sales\Api\PaymentFailuresInterface $paymentFailures, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($orderRepository, $historyRepository, $criteriaBuilder, $filterBuilder, $notifier, $eventManager, $orderCommentSender, $paymentFailures, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function cancel($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cancel');
        return $pluginInfo ? $this->___callPlugins('cancel', func_get_args(), $pluginInfo) : parent::cancel($id);
    }

    /**
     * {@inheritdoc}
     */
    public function place(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'place');
        return $pluginInfo ? $this->___callPlugins('place', func_get_args(), $pluginInfo) : parent::place($order);
    }
}
