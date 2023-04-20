<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Configurepost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Configurepost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Configurepost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\TwoFactorAuth\Model\Tfa $tfa, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Api\TfaSessionInterface $tfaSession, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey\Session $u2fSession, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey $u2fKey, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\Backend\App\Action\Context $context, \Magento\TwoFactorAuth\Model\UserConfig\HtmlAreaTokenVerifier $tokenVerifier)
    {
        $this->___init();
        parent::__construct($tfa, $session, $jsonFactory, $tfaSession, $u2fSession, $u2fKey, $alert, $context, $tokenVerifier);
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
