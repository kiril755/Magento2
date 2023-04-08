<?php
namespace Magento\Catalog\Ui\DataProvider\Product\ProductCustomOptionsDataProvider;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\ProductCustomOptionsDataProvider
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\ProductCustomOptionsDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Framework\App\RequestInterface $request, \Magento\Catalog\Model\Product\Option\Repository $productOptionRepository, \Magento\Catalog\Model\Product\Option\Value $productOptionValueModel, array $addFieldStrategies = [], array $addFilterStrategies = [], array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $modifiersPool = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $request, $productOptionRepository, $productOptionValueModel, $addFieldStrategies, $addFilterStrategies, $meta, $data, $modifiersPool, $metadataPool);
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
