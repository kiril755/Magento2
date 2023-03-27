<?php
namespace Magento\Eav\Model\AttributeSetRepository;

/**
 * Interceptor class for @see \Magento\Eav\Model\AttributeSetRepository
 */
class Interceptor extends \Magento\Eav\Model\AttributeSetRepository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\ResourceModel\Entity\Attribute\Set $attributeSetResource, \Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $collectionFactory, \Magento\Eav\Model\Config $eavConfig, \Magento\Eav\Api\Data\AttributeSetSearchResultsInterfaceFactory $searchResultFactory, \Magento\Framework\Api\ExtensionAttribute\JoinProcessorInterface $joinProcessor, ?\Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface $collectionProcessor = null)
    {
        $this->___init();
        parent::__construct($attributeSetResource, $attributeSetFactory, $collectionFactory, $eavConfig, $searchResultFactory, $joinProcessor, $collectionProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function delete(\Magento\Eav\Api\Data\AttributeSetInterface $attributeSet)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($attributeSet);
    }
}
