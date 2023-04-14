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
    public function processLogin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogin');
        return $pluginInfo ? $this->___callPlugins('processLogin', func_get_args(), $pluginInfo) : parent::processLogin();
    }

    /**
     * {@inheritdoc}
     */
    public function processProlong()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processProlong');
        return $pluginInfo ? $this->___callPlugins('processProlong', func_get_args(), $pluginInfo) : parent::processProlong();
    }

    /**
     * {@inheritdoc}
     */
    public function processLogout()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'processLogout');
        return $pluginInfo ? $this->___callPlugins('processLogout', func_get_args(), $pluginInfo) : parent::processLogout();
    }

    /**
     * {@inheritdoc}
     */
    public function getCurrentSession()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurrentSession');
        return $pluginInfo ? $this->___callPlugins('getCurrentSession', func_get_args(), $pluginInfo) : parent::getCurrentSession();
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoutReasonMessageByStatus($statusCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoutReasonMessageByStatus');
        return $pluginInfo ? $this->___callPlugins('getLogoutReasonMessageByStatus', func_get_args(), $pluginInfo) : parent::getLogoutReasonMessageByStatus($statusCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getLogoutReasonMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLogoutReasonMessage');
        return $pluginInfo ? $this->___callPlugins('getLogoutReasonMessage', func_get_args(), $pluginInfo) : parent::getLogoutReasonMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function getSessionsForCurrentUser()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSessionsForCurrentUser');
        return $pluginInfo ? $this->___callPlugins('getSessionsForCurrentUser', func_get_args(), $pluginInfo) : parent::getSessionsForCurrentUser();
    }

    /**
     * {@inheritdoc}
     */
    public function logoutOtherUserSessions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'logoutOtherUserSessions');
        return $pluginInfo ? $this->___callPlugins('logoutOtherUserSessions', func_get_args(), $pluginInfo) : parent::logoutOtherUserSessions();
    }

    /**
     * {@inheritdoc}
     */
    public function cleanExpiredSessions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'cleanExpiredSessions');
        return $pluginInfo ? $this->___callPlugins('cleanExpiredSessions', func_get_args(), $pluginInfo) : parent::cleanExpiredSessions();
    }
}
