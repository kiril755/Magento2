<?php
namespace Magento\Cms\Controller\Page\View;

/**
 * Interceptor class for @see \Magento\Cms\Controller\Page\View
 */
class Interceptor extends \Magento\Cms\Controller\Page\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Magento\Cms\Helper\Page $pageHelper, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory)
    {
        $this->___init();
        parent::__construct($context, $request, $pageHelper, $resultForwardFactory);
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
