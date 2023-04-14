<?php
namespace Magento\PageBuilder\Controller\Adminhtml\ContentType\Image\Upload;

/**
 * Interceptor class for @see \Magento\PageBuilder\Controller\Adminhtml\ContentType\Image\Upload
 */
class Interceptor extends \Magento\PageBuilder\Controller\Adminhtml\ContentType\Image\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\File\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem\DirectoryList $directoryList, \Magento\Cms\Helper\Wysiwyg\Images $cmsWysiwygImages, ?\Magento\Framework\Filesystem $filesystem = null)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $storeManager, $uploaderFactory, $directoryList, $cmsWysiwygImages, $filesystem);
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
