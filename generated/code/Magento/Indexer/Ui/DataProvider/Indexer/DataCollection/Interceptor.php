<?php
namespace Magento\Indexer\Ui\DataProvider\Indexer\DataCollection;

/**
 * Interceptor class for @see \Magento\Indexer\Ui\DataProvider\Indexer\DataCollection
 */
class Interceptor extends \Magento\Indexer\Ui\DataProvider\Indexer\DataCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Framework\Indexer\ConfigInterface $config, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry)
    {
        $this->___init();
        parent::__construct($entityFactory, $config, $indexerRegistry);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
