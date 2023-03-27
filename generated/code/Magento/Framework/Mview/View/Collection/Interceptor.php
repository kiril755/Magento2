<?php
namespace Magento\Framework\Mview\View\Collection;

/**
 * Interceptor class for @see \Magento\Framework\Mview\View\Collection
 */
class Interceptor extends \Magento\Framework\Mview\View\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Framework\Mview\ConfigInterface $config, \Magento\Framework\Mview\View\State\CollectionFactory $statesFactory, ?\Magento\Framework\Indexer\ConfigInterface $indexerConfig = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $config, $statesFactory, $indexerConfig);
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
