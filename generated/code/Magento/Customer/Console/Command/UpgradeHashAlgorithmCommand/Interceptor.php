<?php
namespace Magento\Customer\Console\Command\UpgradeHashAlgorithmCommand;

/**
 * Interceptor class for @see \Magento\Customer\Console\Command\UpgradeHashAlgorithmCommand
 */
class Interceptor extends \Magento\Customer\Console\Command\UpgradeHashAlgorithmCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory, \Magento\Framework\Encryption\Encryptor $encryptor)
    {
        $this->___init();
        parent::__construct($customerCollectionFactory, $encryptor);
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
