<?php
namespace Magento\Theme\Controller\Adminhtml\System\Design\Theme\DownloadCustomCss;

/**
 * Interceptor class for @see \Magento\Theme\Controller\Adminhtml\System\Design\Theme\DownloadCustomCss
 */
class Interceptor extends \Magento\Theme\Controller\Adminhtml\System\Design\Theme\DownloadCustomCss implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\View\Asset\Repository $assetRepo, \Magento\Framework\Filesystem $appFileSystem)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $fileFactory, $assetRepo, $appFileSystem);
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
