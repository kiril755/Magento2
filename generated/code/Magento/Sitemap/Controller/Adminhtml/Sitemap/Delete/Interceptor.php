<?php
namespace Magento\Sitemap\Controller\Adminhtml\Sitemap\Delete;

/**
 * Interceptor class for @see \Magento\Sitemap\Controller\Adminhtml\Sitemap\Delete
 */
class Interceptor extends \Magento\Sitemap\Controller\Adminhtml\Sitemap\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Sitemap\Model\SitemapFactory $sitemapFactory, \Magento\Framework\Filesystem $filesystem)
    {
        $this->___init();
        parent::__construct($context, $sitemapFactory, $filesystem);
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
