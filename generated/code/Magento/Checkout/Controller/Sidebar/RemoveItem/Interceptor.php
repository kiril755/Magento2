<?php
namespace Magento\Checkout\Controller\Sidebar\RemoveItem;

/**
 * Interceptor class for @see \Magento\Checkout\Controller\Sidebar\RemoveItem
 */
class Interceptor extends \Magento\Checkout\Controller\Sidebar\RemoveItem implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory, \Magento\Checkout\Model\Sidebar $sidebar, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $request, $resultJsonFactory, $resultRedirectFactory, $sidebar, $formKeyValidator, $logger);
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
