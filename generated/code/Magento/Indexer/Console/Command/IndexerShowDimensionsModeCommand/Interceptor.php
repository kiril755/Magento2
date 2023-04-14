<?php
namespace Magento\Indexer\Console\Command\IndexerShowDimensionsModeCommand;

/**
 * Interceptor class for @see \Magento\Indexer\Console\Command\IndexerShowDimensionsModeCommand
 */
class Interceptor extends \Magento\Indexer\Console\Command\IndexerShowDimensionsModeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ObjectManagerFactory $objectManagerFactory, \Magento\Framework\App\Config\ScopeConfigInterface $configReader, array $indexers, array $optionalIndexers = [])
    {
        $this->___init();
        parent::__construct($objectManagerFactory, $configReader, $indexers, $optionalIndexers);
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
