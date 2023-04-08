<?php
namespace Magento\InventoryReservationCli\Command\CreateCompensations;

/**
 * Interceptor class for @see \Magento\InventoryReservationCli\Command\CreateCompensations
 */
class Interceptor extends \Magento\InventoryReservationCli\Command\CreateCompensations implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryReservationCli\Command\Input\GetCommandlineStandardInput $getCommandlineStandardInput, \Magento\InventoryReservationCli\Command\Input\GetReservationFromCompensationArgument $getReservationFromCompensationArgument, \Magento\InventoryReservationsApi\Model\AppendReservationsInterface $appendReservations, \Magento\Framework\App\State $appState)
    {
        $this->___init();
        parent::__construct($getCommandlineStandardInput, $getReservationFromCompensationArgument, $appendReservations, $appState);
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
