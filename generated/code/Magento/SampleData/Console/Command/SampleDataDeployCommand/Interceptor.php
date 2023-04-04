<?php
namespace Magento\SampleData\Console\Command\SampleDataDeployCommand;

/**
 * Interceptor class for @see \Magento\SampleData\Console\Command\SampleDataDeployCommand
 */
class Interceptor extends \Magento\SampleData\Console\Command\SampleDataDeployCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem $filesystem, \Magento\SampleData\Model\Dependency $sampleDataDependency, \Composer\Console\ApplicationFactory $applicationFactory)
    {
        $this->___init();
        parent::__construct($filesystem, $sampleDataDependency, $applicationFactory);
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
