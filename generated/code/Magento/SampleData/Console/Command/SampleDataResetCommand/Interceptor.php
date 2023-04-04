<?php
namespace Magento\SampleData\Console\Command\SampleDataResetCommand;

/**
 * Interceptor class for @see \Magento\SampleData\Console\Command\SampleDataResetCommand
 */
class Interceptor extends \Magento\SampleData\Console\Command\SampleDataResetCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\SampleData\Model\Dependency $sampleDataDependency, \Magento\Framework\Module\ModuleResource $moduleResource, \Magento\Framework\Module\PackageInfo $packageInfo)
    {
        $this->___init();
        parent::__construct($sampleDataDependency, $moduleResource, $packageInfo);
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
