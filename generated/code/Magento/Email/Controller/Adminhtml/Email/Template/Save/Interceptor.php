<?php
namespace Magento\Email\Controller\Adminhtml\Email\Template\Save;

/**
 * Interceptor class for @see \Magento\Email\Controller\Adminhtml\Email\Template\Save
 */
class Interceptor extends \Magento\Email\Controller\Adminhtml\Email\Template\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, ?\Magento\Framework\Stdlib\DateTime\DateTime $dateTime = null, ?\Magento\Email\Model\ResourceModel\Template $templateResource = null, ?\Magento\Backend\Model\Session $backendSession = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $dateTime, $templateResource, $backendSession);
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
