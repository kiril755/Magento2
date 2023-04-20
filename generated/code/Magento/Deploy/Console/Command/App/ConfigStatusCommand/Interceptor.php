<?php
namespace Magento\Deploy\Console\Command\App\ConfigStatusCommand;

/**
 * Interceptor class for @see \Magento\Deploy\Console\Command\App\ConfigStatusCommand
 */
class Interceptor extends \Magento\Deploy\Console\Command\App\ConfigStatusCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Deploy\Model\DeploymentConfig\ChangeDetector $changeDetector)
    {
        $this->___init();
        parent::__construct($changeDetector);
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
