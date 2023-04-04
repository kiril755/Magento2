<?php
namespace Magento\Indexer\Model\Processor;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Processor
 */
class Interceptor extends \Magento\Indexer\Model\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Indexer\ConfigInterface $config, \Magento\Framework\Indexer\IndexerInterfaceFactory $indexerFactory, \Magento\Indexer\Model\Indexer\CollectionFactory $indexersFactory, \Magento\Framework\Mview\ProcessorInterface $mviewProcessor, ?\Magento\Indexer\Model\Processor\MakeSharedIndexValid $makeSharedValid = null)
    {
        $this->___init();
        parent::__construct($config, $indexerFactory, $indexersFactory, $mviewProcessor, $makeSharedValid);
    }

    /**
     * {@inheritdoc}
     */
    public function reindexAllInvalid()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'reindexAllInvalid');
        return $pluginInfo ? $this->___callPlugins('reindexAllInvalid', func_get_args(), $pluginInfo) : parent::reindexAllInvalid();
    }

    /**
     * {@inheritdoc}
     */
    public function updateMview()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'updateMview');
        return $pluginInfo ? $this->___callPlugins('updateMview', func_get_args(), $pluginInfo) : parent::updateMview();
    }
}
