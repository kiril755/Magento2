<?php
namespace Magento\GroupedProduct\Model\ResourceModel\Product\Link;

/**
 * Interceptor class for @see \Magento\GroupedProduct\Model\ResourceModel\Product\Link
 */
class Interceptor extends \Magento\GroupedProduct\Model\ResourceModel\Product\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Catalog\Model\ResourceModel\Product\Relation $catalogProductRelation, \Magento\Framework\EntityManager\MetadataPool $metadataPool, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $catalogProductRelation, $metadataPool, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteProductLink($linkId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteProductLink');
        return $pluginInfo ? $this->___callPlugins('deleteProductLink', func_get_args(), $pluginInfo) : parent::deleteProductLink($linkId);
    }

    /**
     * {@inheritdoc}
     */
    public function saveProductLinks($parentId, $data, $typeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveProductLinks');
        return $pluginInfo ? $this->___callPlugins('saveProductLinks', func_get_args(), $pluginInfo) : parent::saveProductLinks($parentId, $data, $typeId);
    }
}
