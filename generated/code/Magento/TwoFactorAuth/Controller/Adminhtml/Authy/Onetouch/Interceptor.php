<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Onetouch;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Onetouch
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Authy\Onetouch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Model\Provider\Engine\Authy\OneTouch $oneTouch, \Magento\Backend\Model\Auth\Session $session)
    {
        $this->___init();
        parent::__construct($context, $jsonFactory, $tfa, $oneTouch, $session);
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
