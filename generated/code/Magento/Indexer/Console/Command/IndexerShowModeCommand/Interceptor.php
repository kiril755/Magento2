<?php
namespace Magento\Indexer\Console\Command\IndexerShowModeCommand;

/**
 * Interceptor class for @see \Magento\Indexer\Console\Command\IndexerShowModeCommand
 */
class Interceptor extends \Magento\Indexer\Console\Command\IndexerShowModeCommand implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ObjectManagerFactory $objectManagerFactory, ?\Magento\Indexer\Model\Indexer\CollectionFactory $collectionFactory = null)
    {
        $this->___init();
        parent::__construct($objectManagerFactory, $collectionFactory);
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
