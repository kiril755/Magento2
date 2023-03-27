<?php
namespace Magento\Developer\Console\Command\DiInfoCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\DiInfoCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\DiInfoCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Developer\Model\Di\Information $diInformation)
    {
        $this->___init();
        parent::__construct($diInformation);
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
