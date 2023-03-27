<?php
namespace Magento\Theme\Console\Command\ThemeUninstallCommand;

/**
 * Interceptor class for @see \Magento\Theme\Console\Command\ThemeUninstallCommand
 */
class Interceptor extends \Magento\Theme\Console\Command\ThemeUninstallCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache $cache, \Magento\Framework\App\State\CleanupFiles $cleanupFiles, \Magento\Framework\Composer\ComposerInformation $composer, \Magento\Framework\App\MaintenanceMode $maintenanceMode, \Magento\Framework\Composer\DependencyChecker $dependencyChecker, \Magento\Theme\Model\Theme\Data\Collection $themeCollection, \Magento\Framework\Setup\BackupRollbackFactory $backupRollbackFactory, \Magento\Theme\Model\ThemeValidator $themeValidator, \Magento\Theme\Model\Theme\ThemePackageInfo $themePackageInfo, \Magento\Theme\Model\Theme\ThemeUninstaller $themeUninstaller, \Magento\Theme\Model\Theme\ThemeDependencyChecker $themeDependencyChecker, ?\Magento\Framework\App\Console\MaintenanceModeEnabler $maintenanceModeEnabler = null)
    {
        $this->___init();
        parent::__construct($cache, $cleanupFiles, $composer, $maintenanceMode, $dependencyChecker, $themeCollection, $backupRollbackFactory, $themeValidator, $themePackageInfo, $themeUninstaller, $themeDependencyChecker, $maintenanceModeEnabler);
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
