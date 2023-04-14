<?php
namespace Magento\Backend\Console\Command\MaintenanceStatusCommand;

/**
 * Interceptor class for @see \Magento\Backend\Console\Command\MaintenanceStatusCommand
 */
class Interceptor extends \Magento\Backend\Console\Command\MaintenanceStatusCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\MaintenanceMode $maintenanceMode)
    {
        $this->___init();
        parent::__construct($maintenanceMode);
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
