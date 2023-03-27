<?php
namespace Magento\Sitemap\Controller\Adminhtml\Sitemap\Save;

/**
 * Interceptor class for @see \Magento\Sitemap\Controller\Adminhtml\Sitemap\Save
 */
class Interceptor extends \Magento\Sitemap\Controller\Adminhtml\Sitemap\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Validator\StringLength $stringValidator, \Magento\MediaStorage\Model\File\Validator\AvailablePath $pathValidator, \Magento\Sitemap\Helper\Data $sitemapHelper, \Magento\Framework\Filesystem $filesystem, \Magento\Sitemap\Model\SitemapFactory $sitemapFactory)
    {
        $this->___init();
        parent::__construct($context, $stringValidator, $pathValidator, $sitemapHelper, $filesystem, $sitemapFactory);
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
