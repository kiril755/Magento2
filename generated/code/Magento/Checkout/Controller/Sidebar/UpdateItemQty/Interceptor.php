<?php
namespace Magento\Checkout\Controller\Sidebar\UpdateItemQty;

/**
 * Interceptor class for @see \Magento\Checkout\Controller\Sidebar\UpdateItemQty
 */
class Interceptor extends \Magento\Checkout\Controller\Sidebar\UpdateItemQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Sidebar $sidebar, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Json\Helper\Data $jsonHelper, ?\Magento\Checkout\Model\Cart\RequestQuantityProcessor $quantityProcessor = null)
    {
        $this->___init();
        parent::__construct($context, $sidebar, $logger, $jsonHelper, $quantityProcessor);
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
