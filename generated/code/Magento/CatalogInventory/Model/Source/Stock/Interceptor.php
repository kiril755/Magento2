<?php
namespace Magento\CatalogInventory\Model\Source\Stock;

/**
 * Interceptor class for @see \Magento\CatalogInventory\Model\Source\Stock
 */
class Interceptor extends \Magento\CatalogInventory\Model\Source\Stock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null)
    {
        $this->___init();
        parent::__construct($metadataPool);
    }

    /**
     * {@inheritdoc}
     */
    public function getAllOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAllOptions');
        return $pluginInfo ? $this->___callPlugins('getAllOptions', func_get_args(), $pluginInfo) : parent::getAllOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function addValueSortToCollection($collection, $dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addValueSortToCollection');
        return $pluginInfo ? $this->___callPlugins('addValueSortToCollection', func_get_args(), $pluginInfo) : parent::addValueSortToCollection($collection, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute($attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionText($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionText');
        return $pluginInfo ? $this->___callPlugins('getOptionText', func_get_args(), $pluginInfo) : parent::getOptionText($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionId($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionId');
        return $pluginInfo ? $this->___callPlugins('getOptionId', func_get_args(), $pluginInfo) : parent::getOptionId($value);
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatColumns()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatColumns');
        return $pluginInfo ? $this->___callPlugins('getFlatColumns', func_get_args(), $pluginInfo) : parent::getFlatColumns();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatIndexes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatIndexes');
        return $pluginInfo ? $this->___callPlugins('getFlatIndexes', func_get_args(), $pluginInfo) : parent::getFlatIndexes();
    }

    /**
     * {@inheritdoc}
     */
    public function getFlatUpdateSelect($store)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFlatUpdateSelect');
        return $pluginInfo ? $this->___callPlugins('getFlatUpdateSelect', func_get_args(), $pluginInfo) : parent::getFlatUpdateSelect($store);
    }

    /**
     * {@inheritdoc}
     */
    public function getIndexOptionText($value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIndexOptionText');
        return $pluginInfo ? $this->___callPlugins('getIndexOptionText', func_get_args(), $pluginInfo) : parent::getIndexOptionText($value);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }
}
