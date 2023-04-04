<?php
namespace Magento\Developer\Console\Command\TablesWhitelistGenerateCommand;

/**
 * Interceptor class for @see \Magento\Developer\Console\Command\TablesWhitelistGenerateCommand
 */
class Interceptor extends \Magento\Developer\Console\Command\TablesWhitelistGenerateCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Developer\Model\Setup\Declaration\Schema\WhitelistGenerator $whitelistGenerator, $name = null)
    {
        $this->___init();
        parent::__construct($whitelistGenerator, $name);
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
