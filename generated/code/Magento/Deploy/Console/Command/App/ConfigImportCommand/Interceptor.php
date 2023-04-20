<?php
namespace Magento\Deploy\Console\Command\App\ConfigImportCommand;

/**
 * Interceptor class for @see \Magento\Deploy\Console\Command\App\ConfigImportCommand
 */
class Interceptor extends \Magento\Deploy\Console\Command\App\ConfigImportCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Deploy\Console\Command\App\ConfigImport\Processor $processor, ?\Magento\Framework\App\DeploymentConfig $deploymentConfig = null, ?\Magento\Config\Console\Command\EmulatedAdminhtmlAreaProcessor $adminhtmlAreaProcessor = null, ?\Magento\Framework\App\AreaList $areaList = null)
    {
        $this->___init();
        parent::__construct($processor, $deploymentConfig, $adminhtmlAreaProcessor, $areaList);
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
