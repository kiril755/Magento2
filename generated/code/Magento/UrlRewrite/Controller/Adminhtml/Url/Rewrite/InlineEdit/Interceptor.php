<?php
namespace Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite\InlineEdit;

/**
 * Interceptor class for @see \Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite\InlineEdit
 */
class Interceptor extends \Magento\UrlRewrite\Controller\Adminhtml\Url\Rewrite\InlineEdit implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewriteFactory, \Magento\UrlRewrite\Model\ResourceModel\UrlRewriteFactory $urlRewriteResourceFactory, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory)
    {
        $this->___init();
        parent::__construct($context, $urlRewriteFactory, $urlRewriteResourceFactory, $jsonFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Json
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
