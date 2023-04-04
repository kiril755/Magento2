<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Gallery\Upload;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Gallery\Upload
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Gallery\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\RawFactory $resultRawFactory, ?\Magento\Framework\Image\AdapterFactory $adapterFactory = null, ?\Magento\Framework\Filesystem $filesystem = null, ?\Magento\Catalog\Model\Product\Media\Config $productMediaConfig = null)
    {
        $this->___init();
        parent::__construct($context, $resultRawFactory, $adapterFactory, $filesystem, $productMediaConfig);
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
