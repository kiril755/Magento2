<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Google\Qr;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Google\Qr
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Google\Qr implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Model\Provider\Engine\Google $google, \Magento\Framework\Controller\Result\Raw $rawResult)
    {
        $this->___init();
        parent::__construct($context, $session, $tfa, $google, $rawResult);
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
