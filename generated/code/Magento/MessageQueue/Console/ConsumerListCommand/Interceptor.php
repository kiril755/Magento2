<?php
namespace Magento\MessageQueue\Console\ConsumerListCommand;

/**
 * Interceptor class for @see \Magento\MessageQueue\Console\ConsumerListCommand
 */
class Interceptor extends \Magento\MessageQueue\Console\ConsumerListCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\MessageQueue\ConfigInterface $queueConfig, $name = null)
    {
        $this->___init();
        parent::__construct($queueConfig, $name);
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
