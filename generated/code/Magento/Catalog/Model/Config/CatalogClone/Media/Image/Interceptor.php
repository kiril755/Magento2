<?php
namespace Magento\Catalog\Model\Config\CatalogClone\Media\Image;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Config\CatalogClone\Media\Image
 */
class Interceptor extends \Magento\Catalog\Model\Config\CatalogClone\Media\Image implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $attributeCollectionFactory, \Magento\Eav\Model\Config $eavConfig, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $attributeCollectionFactory, $eavConfig, $resource, $resourceCollection, $data, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
