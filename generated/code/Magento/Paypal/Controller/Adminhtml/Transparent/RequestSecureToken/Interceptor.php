<?php
namespace Magento\Paypal\Controller\Adminhtml\Transparent\RequestSecureToken;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Adminhtml\Transparent\RequestSecureToken
 */
class Interceptor extends \Magento\Paypal\Controller\Adminhtml\Transparent\RequestSecureToken implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Session\Generic $sessionTransparent, \Magento\Paypal\Model\Payflow\Service\Request\SecureToken $secureTokenService, \Magento\Framework\Session\SessionManager $sessionManager, \Magento\Paypal\Model\Payflow\Transparent $transparent, ?\Magento\Framework\Session\SessionManagerInterface $sessionInterface = null)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $sessionTransparent, $secureTokenService, $sessionManager, $transparent, $sessionInterface);
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
