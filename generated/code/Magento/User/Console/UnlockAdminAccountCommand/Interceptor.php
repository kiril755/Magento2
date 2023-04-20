<?php
namespace Magento\User\Console\UnlockAdminAccountCommand;

/**
 * Interceptor class for @see \Magento\User\Console\UnlockAdminAccountCommand
 */
class Interceptor extends \Magento\User\Console\UnlockAdminAccountCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\User\Model\ResourceModel\User $adminUser, $name = null)
    {
        $this->___init();
        parent::__construct($adminUser, $name);
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
