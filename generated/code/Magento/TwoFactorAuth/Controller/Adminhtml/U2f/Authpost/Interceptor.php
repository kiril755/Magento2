<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Authpost;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Authpost
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Authpost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\TwoFactorAuth\Model\Tfa $tfa, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\TwoFactorAuth\Api\TfaSessionInterface $tfaSession, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey $u2fKey, \Magento\TwoFactorAuth\Model\Provider\Engine\U2fKey\Session $u2fSession, \Magento\Framework\DataObjectFactory $dataObjectFactory, \Magento\TwoFactorAuth\Model\AlertInterface $alert, \Magento\Backend\App\Action\Context $context)
    {
        $this->___init();
        parent::__construct($tfa, $session, $jsonFactory, $tfaSession, $u2fKey, $u2fSession, $dataObjectFactory, $alert, $context);
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
