<?php
namespace Magento\MessageQueue\Console\RestartConsumerCommand;

/**
 * Interceptor class for @see \Magento\MessageQueue\Console\RestartConsumerCommand
 */
class Interceptor extends \Magento\MessageQueue\Console\RestartConsumerCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\MessageQueue\PoisonPill\PoisonPillPutInterface $poisonPillPut, $name = null)
    {
        $this->___init();
        parent::__construct($poisonPillPut, $name);
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
