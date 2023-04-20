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
    public function prepareAttributesWithDefaultValueForSave(array $rowData, $withDefaultValue = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareAttributesWithDefaultValueForSave');
        return $pluginInfo ? $this->___callPlugins('prepareAttributesWithDefaultValueForSave', func_get_args(), $pluginInfo) : parent::prepareAttributesWithDefaultValueForSave($rowData, $withDefaultValue);
    }
}
