<?php
namespace Magento\Catalog\Model\Category\DataProvider;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category\DataProvider
 */
class Interceptor extends \Magento\Catalog\Model\Category\DataProvider implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct($name, $primaryFieldName, $requestFieldName, \Magento\Ui\DataProvider\EavValidationRules $eavValidationRules, \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $categoryCollectionFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\RequestInterface $request, \Magento\Catalog\Model\CategoryFactory $categoryFactory, array $meta = [], array $data = [], ?\Magento\Ui\DataProvider\Modifier\PoolInterface $pool = null, ?\Magento\Framework\AuthorizationInterface $auth = null, ?\Magento\Framework\Stdlib\ArrayUtils $arrayUtils = null, ?\Magento\Catalog\Model\Attribute\ScopeOverriddenValue $scopeOverriddenValue = null, ?\Magento\Framework\Stdlib\ArrayManager $arrayManager = null, ?\Magento\Catalog\Model\Category\FileInfo $fileInfo = null, ?\Magento\Catalog\Model\Category\Image $categoryImage = null, ?\Magento\Framework\Config\DataInterfaceFactory $uiConfigFactory = null)
    {
        $this->___init();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $eavValidationRules, $categoryCollectionFactory, $storeManager, $registry, $eavConfig, $request, $categoryFactory, $meta, $data, $pool, $auth, $arrayUtils, $scopeOverriddenValue, $arrayManager, $fileInfo, $categoryImage, $uiConfigFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function prepareMeta($meta)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'prepareMeta');
        return $pluginInfo ? $this->___callPlugins('prepareMeta', func_get_args(), $pluginInfo) : parent::prepareMeta($meta);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributesMeta(\Magento\Eav\Model\Entity\Type $entityType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributesMeta');
        return $pluginInfo ? $this->___callPlugins('getAttributesMeta', func_get_args(), $pluginInfo) : parent::getAttributesMeta($entityType);
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultMetaData($result)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultMetaData');
        return $pluginInfo ? $this->___callPlugins('getDefaultMetaData', func_get_args(), $pluginInfo) : parent::getDefaultMetaData($result);
    }
}
