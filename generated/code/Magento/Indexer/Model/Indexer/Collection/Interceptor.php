<?php
namespace Magento\Indexer\Model\Indexer\Collection;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Indexer\Collection
 */
class Interceptor extends \Magento\Indexer\Model\Indexer\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Framework\Indexer\ConfigInterface $config, \Magento\Indexer\Model\ResourceModel\Indexer\State\CollectionFactory $statesFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $config, $statesFactory);
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
