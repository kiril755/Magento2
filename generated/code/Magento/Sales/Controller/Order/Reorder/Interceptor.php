<?php
namespace Magento\Sales\Controller\Order\Reorder;

/**
 * Interceptor class for @see \Magento\Sales\Controller\Order\Reorder
 */
class Interceptor extends \Magento\Sales\Controller\Order\Reorder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Sales\Controller\AbstractController\OrderLoaderInterface $orderLoader, \Magento\Framework\Registry $registry, ?\Magento\Sales\Helper\Reorder $reorderHelper = null, ?\Magento\Sales\Model\Reorder\Reorder $reorder = null, ?\Magento\Checkout\Model\Session $checkoutSession = null)
    {
        $this->___init();
        parent::__construct($context, $orderLoader, $registry, $reorderHelper, $reorder, $checkoutSession);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
