<?php
namespace Magento\AdminAdobeIms\Controller\Adminhtml\OAuth\ImsReauthCallback;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Controller\Adminhtml\OAuth\ImsReauthCallback
 */
class Interceptor extends \Magento\AdminAdobeIms\Controller\Adminhtml\OAuth\ImsReauthCallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdminAdobeIms\Model\ImsConnection $adminImsConnection, \Magento\AdminAdobeIms\Service\ImsConfig $adminImsConfig, \Magento\AdminAdobeIms\Service\ImsOrganizationService $adminOrganizationService, \Magento\AdminAdobeIms\Service\AdminReauthProcessService $adminReauthProcessService, \Magento\AdminAdobeIms\Logger\AdminAdobeImsLogger $logger)
    {
        $this->___init();
        parent::__construct($context, $adminImsConnection, $adminImsConfig, $adminOrganizationService, $adminReauthProcessService, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\ResultInterface
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
