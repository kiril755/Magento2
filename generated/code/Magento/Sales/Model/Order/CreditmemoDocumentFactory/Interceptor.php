<?php
namespace Magento\Sales\Model\Order\CreditmemoDocumentFactory;

/**
 * Interceptor class for @see \Magento\Sales\Model\Order\CreditmemoDocumentFactory
 */
class Interceptor extends \Magento\Sales\Model\Order\CreditmemoDocumentFactory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Sales\Model\Order\CreditmemoFactory $creditmemoFactory, \Magento\Sales\Api\Data\CreditmemoCommentInterfaceFactory $commentFactory, \Magento\Framework\EntityManager\HydratorPool $hydratorPool, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository)
    {
        $this->___init();
        parent::__construct($creditmemoFactory, $commentFactory, $hydratorPool, $orderRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromOrder(\Magento\Sales\Api\Data\OrderInterface $order, array $items = [], ?\Magento\Sales\Api\Data\CreditmemoCommentCreationInterface $comment = null, $appendComment = false, ?\Magento\Sales\Api\Data\CreditmemoCreationArgumentsInterface $arguments = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createFromOrder');
        return $pluginInfo ? $this->___callPlugins('createFromOrder', func_get_args(), $pluginInfo) : parent::createFromOrder($order, $items, $comment, $appendComment, $arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function createFromInvoice(\Magento\Sales\Api\Data\InvoiceInterface $invoice, array $items = [], ?\Magento\Sales\Api\Data\CreditmemoCommentCreationInterface $comment = null, $appendComment = false, ?\Magento\Sales\Api\Data\CreditmemoCreationArgumentsInterface $arguments = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'createFromInvoice');
        return $pluginInfo ? $this->___callPlugins('createFromInvoice', func_get_args(), $pluginInfo) : parent::createFromInvoice($invoice, $items, $comment, $appendComment, $arguments);
    }
}
