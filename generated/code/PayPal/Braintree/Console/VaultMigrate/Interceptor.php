<?php
namespace PayPal\Braintree\Console\VaultMigrate;

/**
 * Interceptor class for @see \PayPal\Braintree\Console\VaultMigrate
 */
class Interceptor extends \PayPal\Braintree\Console\VaultMigrate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection\ConnectionFactory $connectionFactory, \PayPal\Braintree\Model\Adapter\BraintreeAdapter $braintreeAdapter, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Vault\Model\PaymentTokenFactory $paymentToken, \Magento\Vault\Api\PaymentTokenRepositoryInterface $paymentTokenRepository, \Magento\Framework\Encryption\EncryptorInterface $encryptor, \Magento\Framework\Serialize\SerializerInterface $json, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($connectionFactory, $braintreeAdapter, $customerRepository, $paymentToken, $paymentTokenRepository, $encryptor, $json, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function run(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'run');
        return $pluginInfo ? $this->___callPlugins('run', func_get_args(), $pluginInfo) : parent::run($input, $output);
    }
}
