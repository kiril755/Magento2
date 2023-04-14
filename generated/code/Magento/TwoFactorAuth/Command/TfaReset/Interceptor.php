<?php
namespace Magento\TwoFactorAuth\Command\TfaReset;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Command\TfaReset
 */
class Interceptor extends \Magento\TwoFactorAuth\Command\TfaReset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\TwoFactorAuth\Api\UserConfigManagerInterface $userConfigManager, \Magento\TwoFactorAuth\Api\ProviderPoolInterface $providerPool, \Magento\User\Model\UserFactory $userFactory, \Magento\User\Model\ResourceModel\User $userResource)
    {
        $this->___init();
        parent::__construct($userConfigManager, $providerPool, $userFactory, $userResource);
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
