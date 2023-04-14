<?php
namespace Magento\Catalog\Model\ResourceModel\Category;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ResourceModel\Category
 */
class Interceptor extends \Magento\Catalog\Model\ResourceModel\Category implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Model\Factory $modelFactory, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Catalog\Model\ResourceModel\Category\TreeFactory $categoryTreeFactory, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Catalog\Model\Indexer\Category\Product\Processor $indexerProcessor, $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Framework\EntityManager\EntityManager $entityManager = null, ?\Magento\Catalog\Model\ResourceModel\Category\AggregateCount $aggregateCount = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $modelFactory, $eventManager, $categoryTreeFactory, $categoryCollectionFactory, $indexerProcessor, $data, $serializer, $metadataPool, $entityManager, $aggregateCount);
    }

    /**
     * {@inheritdoc}
     */
    public function changeParent(\Magento\Catalog\Model\Category $category, \Magento\Catalog\Model\Category $newParent, $afterCategoryId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'changeParent');
        return $pluginInfo ? $this->___callPlugins('changeParent', func_get_args(), $pluginInfo) : parent::changeParent($category, $newParent, $afterCategoryId);
    }

    /**
     * {@inheritdoc}
     */
    public function delete($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'delete');
        return $pluginInfo ? $this->___callPlugins('delete', func_get_args(), $pluginInfo) : parent::delete($object);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Framework\Model\AbstractModel $object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($object);
    }
}
