<?php
namespace Magento\Customer\Controller\Account\Confirm;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Account\Confirm
 */
class Interceptor extends \Magento\Customer\Controller\Account\Confirm implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Customer\Helper\Address $addressHelper, \Magento\Framework\UrlFactory $urlFactory, ?\Magento\Customer\Model\Logger $customerLogger = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $scopeConfig, $storeManager, $customerAccountManagement, $customerRepository, $addressHelper, $urlFactory, $customerLogger);
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
