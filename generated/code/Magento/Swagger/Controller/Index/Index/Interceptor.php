<?php
namespace Magento\Swagger\Controller\Index\Index;

/**
 * Interceptor class for @see \Magento\Swagger\Controller\Index\Index
 */
class Interceptor extends \Magento\Swagger\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Page\Config $pageConfig, \Magento\Framework\View\Result\PageFactory $pageFactory, ?\Magento\Swagger\Model\Config $config = null)
    {
        $this->___init();
        parent::__construct($context, $pageConfig, $pageFactory, $config);
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
