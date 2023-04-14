<?php
namespace Magento\Indexer\Console\Command\IndexerReindexCommand;

/**
 * Interceptor class for @see \Magento\Indexer\Console\Command\IndexerReindexCommand
 */
class Interceptor extends \Magento\Indexer\Console\Command\IndexerReindexCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ObjectManagerFactory $objectManagerFactory, ?\Magento\Framework\Indexer\IndexerRegistry $indexerRegistry = null, ?\Magento\Framework\Indexer\Config\DependencyInfoProvider $dependencyInfoProvider = null, ?\Magento\Indexer\Model\Processor\MakeSharedIndexValid $makeSharedValid = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($objectManagerFactory, $indexerRegistry, $dependencyInfoProvider, $makeSharedValid, $logger);
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
