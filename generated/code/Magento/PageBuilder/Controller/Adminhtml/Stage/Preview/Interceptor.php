<?php
namespace Magento\PageBuilder\Controller\Adminhtml\Stage\Preview;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\Stage\Preview
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\Stage\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\PageBuilder\Model\Stage\RendererPool $rendererPool, \Magento\PageBuilder\Model\Stage\Preview $preview)
    {
        $this->___init();
        parent::__construct($context, $rendererPool, $preview);
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
