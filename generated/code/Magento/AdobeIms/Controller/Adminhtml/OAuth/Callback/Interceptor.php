<?php
namespace Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback;

/**
 * Interceptor class for @see \Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback
 */
class Interceptor extends \Magento\AdobeIms\Controller\Adminhtml\OAuth\Callback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeImsApi\Api\GetTokenInterface $getToken, \Magento\AdobeImsApi\Api\LogInInterface $login, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $getToken, $login, $logger);
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
