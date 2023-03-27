<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Template\Index;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Template\Index
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Template\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\PageBuilder\Model\Config $config, \Magento\Framework\Controller\Result\ForwardFactory $forwardFactory)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $config, $forwardFactory);
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
