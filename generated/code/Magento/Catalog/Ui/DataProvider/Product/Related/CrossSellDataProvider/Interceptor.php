<?php
namespace Magento\Catalog\Ui\DataProvider\Product\Related\CrossSellDataProvider;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\Related\CrossSellDataProvider
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\Related\CrossSellDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Store\Api\StoreRepositoryInterface $storeRepository, \Magento\Catalog\Api\ProductLinkRepositoryInterface $productLinkRepository, $addFieldStrategies, $addFilterStrategies, array $meta = [], array $data = [])
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $request, $productRepository, $storeRepository, $productLinkRepository, $addFieldStrategies, $addFilterStrategies, $meta, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData();
    }
}
