<?php
namespace Magento\Backend\Controller\Adminhtml\Auth\Login;

/**
 * Interceptor class for @see \Magento\Backend\Controller\Adminhtml\Auth\Login
 */
class Interceptor extends \Magento\Backend\Controller\Adminhtml\Auth\Login implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, ?\Magento\Backend\App\Area\FrontNameResolver $frontNameResolver = null, ?\Magento\Backend\App\BackendAppList $backendAppList = null, ?\Magento\Backend\Model\UrlFactory $backendUrlFactory = null, ?\Magento\Framework\App\Request\Http $http = null)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $frontNameResolver, $backendAppList, $backendUrlFactory, $http);
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
