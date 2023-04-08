<?php
namespace Magento\Downloadable\Console\Command\DomainsShowCommand;

/**
 * Interceptor class for @see \Magento\Downloadable\Console\Command\DomainsShowCommand
 */
class Interceptor extends \Magento\Downloadable\Console\Command\DomainsShowCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Downloadable\Api\DomainManagerInterface $domainManager)
    {
        $this->___init();
        parent::__construct($domainManager);
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
