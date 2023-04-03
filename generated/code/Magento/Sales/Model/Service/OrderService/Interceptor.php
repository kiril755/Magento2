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
    public function getCommentsList($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCommentsList');
        return $pluginInfo ? $this->___callPlugins('getCommentsList', func_get_args(), $pluginInfo) : parent::getCommentsList($id);
    }

    /**
     * {@inheritdoc}
     */
    public function addComment($id, \Magento\Sales\Api\Data\OrderStatusHistoryInterface $statusHistory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addComment');
        return $pluginInfo ? $this->___callPlugins('addComment', func_get_args(), $pluginInfo) : parent::addComment($id, $statusHistory);
    }

    /**
     * {@inheritdoc}
     */
    public function notify($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'notify');
        return $pluginInfo ? $this->___callPlugins('notify', func_get_args(), $pluginInfo) : parent::notify($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getStatus($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStatus');
        return $pluginInfo ? $this->___callPlugins('getStatus', func_get_args(), $pluginInfo) : parent::getStatus($id);
    }

    /**
     * {@inheritdoc}
     */
    public function hold($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hold');
        return $pluginInfo ? $this->___callPlugins('hold', func_get_args(), $pluginInfo) : parent::hold($id);
    }

    /**
     * {@inheritdoc}
     */
    public function unHold($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unHold');
        return $pluginInfo ? $this->___callPlugins('unHold', func_get_args(), $pluginInfo) : parent::unHold($id);
    }

    /**
     * {@inheritdoc}
     */
    public function place(\Magento\Sales\Api\Data\OrderInterface $order)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'place');
        return $pluginInfo ? $this->___callPlugins('place', func_get_args(), $pluginInfo) : parent::place($order);
    }

    /**
     * {@inheritdoc}
     */
    public function setState(\Magento\Sales\Api\Data\OrderInterface $order, $state, $status = false, $comment = '', $isCustomerNotified = null, $shouldProtectState = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setState');
        return $pluginInfo ? $this->___callPlugins('setState', func_get_args(), $pluginInfo) : parent::setState($order, $state, $status, $comment, $isCustomerNotified, $shouldProtectState);
    }
}
