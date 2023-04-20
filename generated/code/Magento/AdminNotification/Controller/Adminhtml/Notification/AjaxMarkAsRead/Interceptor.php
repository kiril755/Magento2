<?php
namespace Magento\AdminNotification\Controller\Adminhtml\Notification\AjaxMarkAsRead;

/**
 * Interceptor class for @see \Magento\AdminNotification\Controller\Adminhtml\Notification\AjaxMarkAsRead
 */
class Interceptor extends \Magento\AdminNotification\Controller\Adminhtml\Notification\AjaxMarkAsRead implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdminNotification\Model\NotificationService $notificationService)
    {
        $this->___init();
        parent::__construct($context, $notificationService);
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
