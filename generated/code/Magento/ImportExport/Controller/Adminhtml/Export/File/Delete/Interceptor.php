<?php
namespace Magento\ImportExport\Controller\Adminhtml\Export\File\Delete;

/**
 * Interceptor class for @see \Magento\ImportExport\Controller\Adminhtml\Export\File\Delete
 */
class Interceptor extends \Magento\ImportExport\Controller\Adminhtml\Export\File\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filesystem $filesystem, \Magento\Framework\Filesystem\Directory\WriteFactory $writeFactory)
    {
        $this->___init();
        parent::__construct($context, $filesystem, $writeFactory);
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
