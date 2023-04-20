<?php
namespace Magento\AdminAdobeIms\Model\Auth;

/**
 * Interceptor class for @see \Magento\AdminAdobeIms\Model\Auth
 */
class Interceptor extends \Magento\AdminAdobeIms\Model\Auth implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Backend\Helper\Data $backendData, \Magento\Backend\Model\Auth\StorageInterface $authStorage, \Magento\Backend\Model\Auth\Credential\StorageInterface $credentialStorage, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\Framework\Data\Collection\ModelFactory $modelFactory)
    {
        $this->___init();
        parent::__construct($eventManager, $backendData, $authStorage, $credentialStorage, $coreConfig, $modelFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function login($username, $password)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'login');
        return $pluginInfo ? $this->___callPlugins('login', func_get_args(), $pluginInfo) : parent::login($username, $password);
    }

    /**
     * {@inheritdoc}
     */
    public function logout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logout');
        return $pluginInfo ? $this->___callPlugins('logout', func_get_args(), $pluginInfo) : parent::logout();
    }
}
