<?php
namespace Magento\Theme\Controller\Adminhtml\Design\Config\Edit;

/**
 * Interceptor class for @see \Magento\Theme\Controller\Adminhtml\Design\Config\Edit
 */
class Interceptor extends \Magento\Theme\Controller\Adminhtml\Design\Config\Edit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\App\ScopeValidatorInterface $scopeValidator, \Magento\Framework\App\ScopeResolverPool $scopeResolverPool)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $scopeValidator, $scopeResolverPool);
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
