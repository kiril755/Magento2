<?php
namespace Magento\ImportExport\Controller\Adminhtml\Import\Download;

/**
 * Interceptor class for @see \Magento\ImportExport\Controller\Adminhtml\Import\Download
 */
class Interceptor extends \Magento\ImportExport\Controller\Adminhtml\Import\Download implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, \Magento\Framework\Filesystem\Directory\ReadFactory $readFactory, \Magento\Framework\Component\ComponentRegistrar $componentRegistrar, ?\Magento\ImportExport\Model\Import\SampleFileProvider $sampleFileProvider = null)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $resultRawFactory, $readFactory, $componentRegistrar, $sampleFileProvider);
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
