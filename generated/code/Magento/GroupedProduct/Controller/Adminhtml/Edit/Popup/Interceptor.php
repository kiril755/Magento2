<?php
namespace Magento\GroupedProduct\Controller\Adminhtml\Edit\Popup;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Controller\Adminhtml\Edit\Popup
 */
class Interceptor extends \Magento\GroupedProduct\Controller\Adminhtml\Edit\Popup implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\ProductFactory $factory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $registry, $factory, $logger);
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
