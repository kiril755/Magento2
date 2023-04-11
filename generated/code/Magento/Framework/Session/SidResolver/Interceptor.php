<?php
namespace Magento\Framework\Session\SidResolver;

/**
 * Interceptor class for @see \Magento\Framework\Session\SidResolver
 */
class Interceptor extends \Magento\Framework\Session\SidResolver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\UrlInterface $urlBuilder, \Magento\Framework\App\RequestInterface $request, $scopeType, array $sidNameMap = [], ?\Magento\Framework\App\State $appState = null)
    {
        $this->___init();
        parent::__construct($scopeConfig, $urlBuilder, $request, $scopeType, $sidNameMap, $appState);
    }

    /**
     * {@inheritdoc}
     */
    public function getSid(\Magento\Framework\Session\SessionManagerInterface $session)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSid');
        return $pluginInfo ? $this->___callPlugins('getSid', func_get_args(), $pluginInfo) : parent::getSid($session);
    }
}
