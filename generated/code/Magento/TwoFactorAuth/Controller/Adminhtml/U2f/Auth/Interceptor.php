<?php
namespace Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Auth;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Auth
 */
class Interceptor extends \Magento\TwoFactorAuth\Controller\Adminhtml\U2f\Auth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Backend\Model\Auth\Session $session, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\TwoFactorAuth\Api\UserConfigManagerInterface $userConfigManager, \Magento\TwoFactorAuth\Api\TfaInterface $tfa)
    {
        $this->___init();
        parent::__construct($context, $session, $pageFactory, $userConfigManager, $tfa);
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
