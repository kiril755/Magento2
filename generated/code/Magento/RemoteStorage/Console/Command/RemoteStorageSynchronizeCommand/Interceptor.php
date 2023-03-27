<?php
namespace Magento\RemoteStorage\Console\Command\RemoteStorageSynchronizeCommand;

/**
 * Interceptor class for @see \Magento\RemoteStorage\Console\Command\RemoteStorageSynchronizeCommand
 */
class Interceptor extends \Magento\RemoteStorage\Console\Command\RemoteStorageSynchronizeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\RemoteStorage\Model\Synchronizer $synchronizer, \Magento\RemoteStorage\Model\Config $config)
    {
        $this->___init();
        parent::__construct($synchronizer, $config);
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
