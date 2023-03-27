<?php
namespace Magento\TwoFactorAuth\Command\GoogleSecret;

/**
 * Interceptor class for @see \Magento\TwoFactorAuth\Command\GoogleSecret
 */
class Interceptor extends \Magento\TwoFactorAuth\Command\GoogleSecret implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\User\Model\UserFactory $userFactory, \Magento\User\Model\ResourceModel\User $userResource, \Magento\TwoFactorAuth\Model\Provider\Engine\Google $google, \Magento\TwoFactorAuth\Api\UserConfigManagerInterface $configManager)
    {
        $this->___init();
        parent::__construct($userFactory, $userResource, $google, $configManager);
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
