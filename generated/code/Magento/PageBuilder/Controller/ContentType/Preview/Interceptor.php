<?php
namespace Magento\PageBuilder\Controller\ContentType\Preview;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\ContentType\Preview
 */
class Interceptor extends \Magento\PageBuilder\Controller\ContentType\Preview implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\PageBuilder\Model\Stage\RendererPool $rendererPool, ?\Magento\Backend\Model\Auth $auth = null)
    {
        $this->___init();
        parent::__construct($context, $rendererPool, $auth);
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
