<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Duo\Authpost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Duo\Authpost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Duo\Authpost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\TwoFactorAuth\Model\Provider\Engine\DuoSecurity $duoSecurity, \Magento\TwoFactorAuth\Api\TfaSessionInterface $tfaSession, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Model\UserConfig\HtmlAreaTokenVerifier $tokenVerifier, \Magento\TwoFactorAuth\Api\UserConfigManagerInterface $userConfig)
    {
        $this->___init();
        parent::__construct($context, $session, $duoSecurity, $tfaSession, $dataObjectFactory, $alert, $tfa, $tokenVerifier, $userConfig);
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
