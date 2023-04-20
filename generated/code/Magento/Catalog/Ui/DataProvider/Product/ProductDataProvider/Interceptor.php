<?php
namespace Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider;

/**
 * Interceptor class for @see \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider
 */
class Interceptor extends \Magento\Catalog\Ui\DataProvider\Product\ProductDataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, array $addFieldStrategies = [], array $addFilterStrategies = [], array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $modifiersPool = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $collectionFactory, $addFieldStrategies, $addFilterStrategies, $meta, $data, $modifiersPool);
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
