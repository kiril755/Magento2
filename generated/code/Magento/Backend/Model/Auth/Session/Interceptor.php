<?php
namespace Magento\Backend\Model\Auth\Session;

/**
 * Interceptor class for @see \Magento\Backend\Model\Auth\Session
 */
class Interceptor extends \Magento\Backend\Model\Auth\Session implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Request\Http $request, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Framework\Session\Config\ConfigInterface $sessionConfig, \Magento\Framework\Session\SaveHandlerInterface $saveHandler, \Magento\Framework\Session\ValidatorInterface $validator, \Magento\Framework\Session\StorageInterface $storage, \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager, \Magento\Framework\Stdlib\Cookie\CookieMetadataFactory $cookieMetadataFactory, \Magento\Framework\App\State $appState, \Magento\Framework\Acl\Builder $aclBuilder, \Magento\Backend\Model\UrlInterface $backendUrl, \Magento\Backend\App\ConfigInterface $config, ?\Magento\Framework\Message\ManagerInterface $messageManager = null)
    {
        $this->___init();
        parent::__construct($request, $sidResolver, $sessionConfig, $saveHandler, $validator, $storage, $cookieManager, $cookieMetadataFactory, $appState, $aclBuilder, $backendUrl, $config, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function prolong()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prolong');
        return $pluginInfo ? $this->___callPlugins('prolong', func_get_args(), $pluginInfo) : parent::prolong();
    }

    /**
     * {@inheritdoc}
     */
    public function start()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        return $pluginInfo ? $this->___callPlugins('start', func_get_args(), $pluginInfo) : parent::start();
    }

    /**
     * {@inheritdoc}
     */
    public function clearStorage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearStorage');
        return $pluginInfo ? $this->___callPlugins('clearStorage', func_get_args(), $pluginInfo) : parent::clearStorage();
    }
}
