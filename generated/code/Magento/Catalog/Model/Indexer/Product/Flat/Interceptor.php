<?php
namespace Magento\Catalog\Model\Indexer\Product\Flat;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Indexer\Product\Flat
 */
class Interceptor extends \Magento\Catalog\Model\Indexer\Product\Flat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Indexer\Product\Flat\Action\Row $productFlatIndexerRow, \Magento\Catalog\Model\Indexer\Product\Flat\Action\Rows $productFlatIndexerRows, \Magento\Catalog\Model\Indexer\Product\Flat\Action\Full $productFlatIndexerFull)
    {
        $this->___init();
        parent::__construct($productFlatIndexerRow, $productFlatIndexerRows, $productFlatIndexerFull);
    }

    /**
     * {@inheritdoc}
     */
    public function executeFull()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeFull');
        return $pluginInfo ? $this->___callPlugins('executeFull', func_get_args(), $pluginInfo) : parent::executeFull();
    }

    /**
     * {@inheritdoc}
     */
    public function executeList(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeList');
        return $pluginInfo ? $this->___callPlugins('executeList', func_get_args(), $pluginInfo) : parent::executeList($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function executeRow($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'executeRow');
        return $pluginInfo ? $this->___callPlugins('executeRow', func_get_args(), $pluginInfo) : parent::executeRow($id);
    }
}
