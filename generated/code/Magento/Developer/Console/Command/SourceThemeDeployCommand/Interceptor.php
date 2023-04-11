<?php
namespace Magento\Developer\Console\Command\SourceThemeDeployCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\SourceThemeDeployCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\SourceThemeDeployCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Validator\Locale $validator, \Magento\Framework\App\View\Asset\Publisher $assetPublisher, \Magento\Framework\View\Asset\Repository $assetRepository, ?\Magento\Framework\Filesystem\Io\File $file = null)
    {
        $this->___init();
        parent::__construct($validator, $assetPublisher, $assetRepository, $file);
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
