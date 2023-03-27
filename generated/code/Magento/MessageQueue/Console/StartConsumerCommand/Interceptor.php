<?php
namespace Magento\MessageQueue\Console\StartConsumerCommand;

/**
 * Interceptor class for @see \Magento\MessageQueue\Console\StartConsumerCommand
 */
class Interceptor extends \Magento\MessageQueue\Console\StartConsumerCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\State $appState, \Magento\Framework\MessageQueue\ConsumerFactory $consumerFactory, $name = null, ?\Magento\Framework\Lock\LockManagerInterface $lockManager = null)
    {
        $this->___init();
        parent::__construct($appState, $consumerFactory, $name, $lockManager);
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
