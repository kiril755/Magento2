<?php
namespace Magento\Store\Controller\Store\Redirect;

/**
 * Interceptor class for @see \Magento\Store\Controller\Store\Redirect
 */
class Interceptor extends \Magento\Store\Controller\Store\Redirect implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Store\Api\StoreResolverInterface $storeResolver, \Magento\Framework\Session\Generic $session, \Magento\Framework\Session\SidResolverInterface $sidResolver, \Magento\Store\Model\StoreSwitcher\HashGenerator $hashGenerator, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Store\Model\StoreSwitcher\RedirectDataGenerator $redirectDataGenerator = null, ?\Magento\Store\Model\StoreSwitcher\ContextInterfaceFactory $contextFactory = null)
    {
        $this->___init();
        parent::__construct($context, $storeRepository, $storeResolver, $session, $sidResolver, $hashGenerator, $storeManager, $redirectDataGenerator, $contextFactory);
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
