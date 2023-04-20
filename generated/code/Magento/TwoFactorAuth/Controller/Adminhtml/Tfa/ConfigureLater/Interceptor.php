<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ConfigureLater;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ConfigureLater
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\Tfa\ConfigureLater implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\TwoFactorAuth\Api\TfaInterface $tfa, \Magento\TwoFactorAuth\Api\TfaSessionInterface $session, \Magento\Authorization\Model\UserContextInterface $userContext)
    {
        $this->___init();
        parent::__construct($context, $tfa, $session, $userContext);
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
