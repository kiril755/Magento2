<?php
namespace Magento\Customer\Controller\Adminhtml\Address\Viewfile;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Address\Viewfile
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Address\Viewfile implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\Url\DecoderInterface $urlDecoder, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Helper\File\Storage $storage, \Magento\Framework\Filesystem\Io\File $ioFile)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $resultRawFactory, $urlDecoder, $filesystem, $storage, $ioFile);
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
