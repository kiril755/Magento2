<?php
namespace Magento\Catalog\Model\Product\Attribute\Repository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Repository
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Attribute $attributeResource, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Eav\Api\AttributeRepositoryInterface $eavAttributeRepository, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\ValidatorFactory $validatorFactory, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder)
    {
        $this->___init();
        parent::__construct($attributeResource, $productHelper, $filterManager, $eavAttributeRepository, $eavConfig, $validatorFactory, $searchCriteriaBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function get($attributeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($attributeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductAttributeInterface $attribute)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($attribute);
    }

    /**
     * {@inheritdoc}
     */
    public function getCustomAttributesMetadata($dataObjectClassName = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCustomAttributesMetadata');
        return $pluginInfo ? $this->___callPlugins('getCustomAttributesMetadata', func_get_args(), $pluginInfo) : parent::getCustomAttributesMetadata($dataObjectClassName);
    }
}
