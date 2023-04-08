<?php
namespace Magento\Cron\Console\Command\CronCommand;

/**
 * Interceptor class for @see \Magento\Cron\Console\Command\CronCommand
 */
class Interceptor extends \Magento\Cron\Console\Command\CronCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ObjectManagerFactory $objectManagerFactory, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null)
    {
        $this->___init();
        parent::__construct($objectManagerFactory, $deploymentConfig);
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
