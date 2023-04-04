<?php
namespace Magento\Translation\Console\Command\UninstallLanguageCommand;

/**
 * Interceptor class for @see \Magento\Translation\Console\Command\UninstallLanguageCommand
 */
class Interceptor extends \Magento\Translation\Console\Command\UninstallLanguageCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Composer\DependencyChecker $dependencyChecker, \Magento\Framework\Composer\Remove $remove, \Magento\Framework\Composer\ComposerInformation $composerInfo, \Magento\Framework\App\Cache $cache, \Magento\Framework\Setup\BackupRollbackFactory $backupRollbackFactory)
    {
        $this->___init();
        parent::__construct($dependencyChecker, $remove, $composerInfo, $cache, $backupRollbackFactory);
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
