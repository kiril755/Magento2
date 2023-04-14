<?php
namespace Magento\TwoFactorAuth\Command\TfaProviders;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Command\TfaProviders
 */
class Interceptor extends \Magento\TwoFactorAuth\Command\TfaProviders implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\TwoFactorAuth\Api\ProviderPoolInterface $providerPool)
    {
        $this->___init();
        parent::__construct($providerPool);
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
