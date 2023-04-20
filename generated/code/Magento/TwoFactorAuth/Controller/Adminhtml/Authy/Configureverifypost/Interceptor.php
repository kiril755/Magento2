<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Configureverifypost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Configureverifypost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Configureverifypost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Api\TfaSessionInterface $tfaSession, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\TwoFactorAuth\Model\Provider\Engine\Authy $authy, \Magento\TwoFactorAuth\Model\Provider\Engine\Authy\Verification $verification, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Model\UserConfig\HtmlAreaTokenVerifier $tokenVerifier)
    {
        $this->___init();
        parent::__construct($context, $session, $tfa, $tfaSession, $alert, $authy, $verification, $jsonFactory, $tokenVerifier);
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
