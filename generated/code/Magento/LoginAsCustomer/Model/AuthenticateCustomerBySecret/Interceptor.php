<?php
namespace Magento\LoginAsCustomer\Model\AuthenticateCustomerBySecret;

/**
 * Interceptor class for @see \Magento\LoginAsCustomer\Model\AuthenticateCustomerBySecret
 */
class Interceptor extends \Magento\LoginAsCustomer\Model\AuthenticateCustomerBySecret implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\LoginAsCustomerApi\Api\GetAuthenticationDataBySecretInterface $getAuthenticationDataBySecret, \Magento\Customer\Model\Session $customerSession, ?\Magento\LoginAsCustomerApi\Api\SetLoggedAsCustomerAdminIdInterface $setLoggedAsCustomerAdminId = null)
    {
        $this->___init();
        parent::__construct($getAuthenticationDataBySecret, $customerSession, $setLoggedAsCustomerAdminId);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $secret) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($secret);
    }
}
