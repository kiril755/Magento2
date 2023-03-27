<?php
namespace Magento\Developer\Console\Command\ProfilerDisableCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\ProfilerDisableCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\ProfilerDisableCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Filesystem\Io\File $filesystem)
    {
        $this->___init();
        parent::__construct($filesystem);
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
