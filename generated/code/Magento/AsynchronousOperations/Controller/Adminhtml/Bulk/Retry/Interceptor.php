<?php
namespace Magento\AsynchronousOperations\Controller\Adminhtml\Bulk\Retry;

/**
 * Interceptor class for @see \Magento\AsynchronousOperations\Controller\Adminhtml\Bulk\Retry
 */
class Interceptor extends \Magento\AsynchronousOperations\Controller\Adminhtml\Bulk\Retry implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AsynchronousOperations\Model\BulkManagement $bulkManagement, \Magento\AsynchronousOperations\Model\BulkNotificationManagement $notificationManagement, \Magento\AsynchronousOperations\Model\AccessValidator $accessValidator)
    {
        $this->___init();
        parent::__construct($context, $bulkManagement, $notificationManagement, $accessValidator);
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
