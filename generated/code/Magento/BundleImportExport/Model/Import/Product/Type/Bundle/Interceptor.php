<?php
namespace Magento\BundleImportExport\Model\Import\Product\Type\Bundle;

/**
 * Interceptor class for @see \Magento\BundleImportExport\Model\Import\Product\Type\Bundle
 */
class Interceptor extends \Magento\BundleImportExport\Model\Import\Product\Type\Bundle implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $attrSetColFac, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $prodAttrColFac, \Magento\Framework\App\ResourceConnection $resource, array $params, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\BundleImportExport\Model\Import\Product\Type\Bundle\RelationsDataSaver $relationsDataSaver = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($attrSetColFac, $prodAttrColFac, $resource, $params, $metadataPool, $relationsDataSaver, $storeManager);
    }

    /**
     * {@inheritdoc}
     */
    public function saveData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveData');
        return $pluginInfo ? $this->___callPlugins('saveData', func_get_args(), $pluginInfo) : parent::saveData();
    }

    /**
     * {@inheritdoc}
     */
    public function isRowValid(array $rowData, $rowNum, $isNewProduct = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRowValid');
        return $pluginInfo ? $this->___callPlugins('isRowValid', func_get_args(), $pluginInfo) : parent::isRowValid($rowData, $rowNum, $isNewProduct);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareAttributesWithDefaultValueForSave(array $rowData, $withDefaultValue = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAttributesWithDefaultValueForSave');
        return $pluginInfo ? $this->___callPlugins('prepareAttributesWithDefaultValueForSave', func_get_args(), $pluginInfo) : parent::prepareAttributesWithDefaultValueForSave($rowData, $withDefaultValue);
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveAttribute($attributeCode, $attributeSet)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'retrieveAttribute');
        return $pluginInfo ? $this->___callPlugins('retrieveAttribute', func_get_args(), $pluginInfo) : parent::retrieveAttribute($attributeCode, $attributeSet);
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveAttributeFromCache($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'retrieveAttributeFromCache');
        return $pluginInfo ? $this->___callPlugins('retrieveAttributeFromCache', func_get_args(), $pluginInfo) : parent::retrieveAttributeFromCache($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function addAttributeOption($code, $optionKey, $optionValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addAttributeOption');
        return $pluginInfo ? $this->___callPlugins('addAttributeOption', func_get_args(), $pluginInfo) : parent::addAttributeOption($code, $optionKey, $optionValue);
    }

    /**
     * {@inheritdoc}
     */
    public function getParticularAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParticularAttributes');
        return $pluginInfo ? $this->___callPlugins('getParticularAttributes', func_get_args(), $pluginInfo) : parent::getParticularAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomFieldsMapping()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomFieldsMapping');
        return $pluginInfo ? $this->___callPlugins('getCustomFieldsMapping', func_get_args(), $pluginInfo) : parent::getCustomFieldsMapping();
    }

    /**
     * {@inheritdoc}
     */
    public function isSuitable()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isSuitable');
        return $pluginInfo ? $this->___callPlugins('isSuitable', func_get_args(), $pluginInfo) : parent::isSuitable();
    }

    /**
     * {@inheritdoc}
     */
    public function clearEmptyData(array $rowData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearEmptyData');
        return $pluginInfo ? $this->___callPlugins('clearEmptyData', func_get_args(), $pluginInfo) : parent::clearEmptyData($rowData);
    }
}
