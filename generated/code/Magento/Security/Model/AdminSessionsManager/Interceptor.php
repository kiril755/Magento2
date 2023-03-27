<?php
namespace Magento\Security\Model\AdminSessionsManager;

/**
 * Interceptor class for @see \Magento\Security\Model\AdminSessionsManager
 */
class Interceptor extends \Magento\Security\Model\AdminSessionsManager implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Security\Model\ConfigInterface $securityConfig, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Security\Model\AdminSessionInfoFactory $adminSessionInfoFactory, \Magento\Security\Model\ResourceModel\AdminSessionInfo\CollectionFactory $adminSessionInfoCollectionFactory, \Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress)
    {
        $this->___init();
        parent::__construct($securityConfig, $authSession, $adminSessionInfoFactory, $adminSessionInfoCollectionFactory, $dateTime, $remoteAddress);
    }

    /**
     * {@inheritdoc}
     */
    public function logoutOtherUserSessions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logoutOtherUserSessions');
        return $pluginInfo ? $this->___callPlugins('logoutOtherUserSessions', func_get_args(), $pluginInfo) : parent::logoutOtherUserSessions();
    }
}
