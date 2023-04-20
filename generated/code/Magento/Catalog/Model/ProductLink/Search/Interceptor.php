<?php
namespace Magento\Catalog\Model\ProductLink\Search;

/**
 * Interceptor class for @see \Magento\Catalog\Model\ProductLink\Search
 */
class Interceptor extends \Magento\Catalog\Model\ProductLink\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory, \Magento\Catalog\Model\Product\Visibility $catalogVisibility, \Magento\Ui\DataProvider\AddFilterToCollectionInterface $filter)
    {
        $this->___init();
        parent::__construct($productCollectionFactory, $catalogVisibility, $filter);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareCollection(string $searchKey, int $pageNum, int $limit) : \Magento\Catalog\Model\ResourceModel\Product\Collection
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareCollection');
        return $pluginInfo ? $this->___callPlugins('prepareCollection', func_get_args(), $pluginInfo) : parent::prepareCollection($searchKey, $pageNum, $limit);
    }
}
