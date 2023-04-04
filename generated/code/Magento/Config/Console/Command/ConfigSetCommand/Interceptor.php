<?php
namespace Magento\Config\Console\Command\ConfigSetCommand;

/**
 * Interceptor class for @see \Magento\Config\Console\Command\ConfigSetCommand
 */
class Interceptor extends \Magento\Config\Console\Command\ConfigSetCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Console\Command\EmulatedAdminhtmlAreaProcessor $emulatedAreaProcessor, \Magento\Deploy\Model\DeploymentConfig\ChangeDetector $changeDetector, \Magento\Config\Console\Command\ConfigSet\ProcessorFacadeFactory $processorFacadeFactory, \Magento\Framework\App\DeploymentConfig $deploymentConfig)
    {
        $this->___init();
        parent::__construct($emulatedAreaProcessor, $changeDetector, $processorFacadeFactory, $deploymentConfig);
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
