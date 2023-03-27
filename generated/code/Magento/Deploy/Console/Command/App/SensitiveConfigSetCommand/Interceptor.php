<?php
namespace Magento\Deploy\Console\Command\App\SensitiveConfigSetCommand;

/**
 * Interceptor class for @see \Magento\Deploy\Console\Command\App\SensitiveConfigSetCommand
 */
class Interceptor extends \Magento\Deploy\Console\Command\App\SensitiveConfigSetCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Deploy\Console\Command\App\SensitiveConfigSet\SensitiveConfigSetFacade $facade, \Magento\Deploy\Model\DeploymentConfig\ChangeDetector $changeDetector, \Magento\Deploy\Model\DeploymentConfig\Hash $hash, \Magento\Config\Console\Command\EmulatedAdminhtmlAreaProcessor $emulatedAreaProcessor)
    {
        $this->___init();
        parent::__construct($facade, $changeDetector, $hash, $emulatedAreaProcessor);
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
