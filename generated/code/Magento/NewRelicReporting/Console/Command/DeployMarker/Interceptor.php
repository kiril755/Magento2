<?php
namespace Magento\NewRelicReporting\Console\Command\DeployMarker;

/**
 * Interceptor class for @see \Magento\NewRelicReporting\Console\Command\DeployMarker
 */
class Interceptor extends \Magento\NewRelicReporting\Console\Command\DeployMarker implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\NewRelicReporting\Model\Apm\DeploymentsFactory $deploymentsFactory, \Magento\NewRelicReporting\Model\ServiceShellUser $serviceShellUser, $name = null)
    {
        $this->___init();
        parent::__construct($deploymentsFactory, $serviceShellUser, $name);
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
