<?php
namespace Magento\Developer\Console\Command\QueryLogEnableCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\QueryLogEnableCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\QueryLogEnableCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\DeploymentConfig\Writer $deployConfigWriter, $name = null)
    {
        $this->___init();
        parent::__construct($deployConfigWriter, $name);
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
