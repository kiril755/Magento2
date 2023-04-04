<?php
namespace Magento\Catalog\Model\ProductLink\Repository;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ProductLink\Repository
 */
class Interceptor extends \Magento\Catalog\Model\ProductLink\Repository implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ProductLink\CollectionProvider $entityCollectionProvider, \Magento\Catalog\Model\Product\Initialization\Helper\ProductLinks $linkInitializer, \Magento\Catalog\Model\ProductLink\Management $linkManagement, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, ?\Magento\Catalog\Api\Data\ProductLinkInterfaceFactory $productLinkFactory = null, ?\Magento\Catalog\Api\Data\ProductLinkExtensionFactory $productLinkExtensionFactory = null, ?\Magento\Catalog\Model\ProductLink\ProductLinkQuery $query = null)
    {
        $this->___init();
        parent::__construct($productRepository, $entityCollectionProvider, $linkInitializer, $linkManagement, $dataObjectProcessor, $productLinkFactory, $productLinkExtensionFactory, $query);
    }

    /**
     * {@inheritdoc}
     */
    public function save(\Magento\Catalog\Api\Data\ProductLinkInterface $entity)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function deleteById($sku, $type, $linkedProductSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteById');
        return $pluginInfo ? $this->___callPlugins('deleteById', func_get_args(), $pluginInfo) : parent::deleteById($sku, $type, $linkedProductSku);
    }
}
