<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Verifyonetouch;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Verifyonetouch
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Verifyonetouch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Api\TfaSessionInterface $tfaSession, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\TwoFactorAuth\Model\Provider\Engine\Authy\OneTouch $oneTouch, \Magento\Backend\Model\Auth\Session $session)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $tfaSession, $tfa, $alert, $oneTouch, $session);
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
