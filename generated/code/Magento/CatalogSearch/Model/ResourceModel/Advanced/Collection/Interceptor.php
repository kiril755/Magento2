<?php
namespace Magento\CatalogSearch\Model\ResourceModel\Advanced\Collection;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\ResourceModel\Advanced\Collection
 */
class Interceptor extends \Magento\CatalogSearch\Model\ResourceModel\Advanced\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Catalog\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Catalog\Model\Indexer\Product\Flat\State $catalogProductFlatState, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Catalog\Model\ResourceModel\Url $catalogUrl, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Api\GroupManagementInterface $groupManagement, $requestBuilder = null, $searchEngine = null, $temporaryStorageFactory = null, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Api\Search\SearchResultFactory $searchResultFactory = null, ?\Magento\Catalog\Model\ResourceModel\Product\Collection\ProductLimitationFactory $productLimitationFactory = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, $searchRequestName = 'advanced_search_container', ?\Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\SearchCriteriaResolverFactory $searchCriteriaResolverFactory = null, ?\Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\SearchResultApplierFactory $searchResultApplierFactory = null, ?\Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\TotalRecordsResolverFactory $totalRecordsResolverFactory = null, ?\Magento\Framework\Search\EngineResolverInterface $engineResolver = null, ?\Magento\CatalogSearch\Model\ResourceModel\Fulltext\Collection\DefaultFilterStrategyApplyCheckerInterface $defaultFilterStrategyApplyChecker = null, ?\Magento\CatalogSearch\Model\ResourceModel\Advanced $advancedSearchResource = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $moduleManager, $catalogProductFlatState, $scopeConfig, $productOptionFactory, $catalogUrl, $localeDate, $customerSession, $dateTime, $groupManagement, $requestBuilder, $searchEngine, $temporaryStorageFactory, $connection, $searchResultFactory, $productLimitationFactory, $metadataPool, $searchRequestName, $searchCriteriaResolverFactory, $searchResultApplierFactory, $totalRecordsResolverFactory, $engineResolver, $defaultFilterStrategyApplyChecker, $advancedSearchResource);
    }

    /**
     * {@inheritdoc}
     */
    public function setOrder($attribute, $dir = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setOrder');
        return $pluginInfo ? $this->___callPlugins('setOrder', func_get_args(), $pluginInfo) : parent::setOrder($attribute, $dir);
    }

    /**
     * {@inheritdoc}
     */
    public function load($printQuery = false, $logQuery = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($printQuery, $logQuery);
    }

    /**
     * {@inheritdoc}
     */
    public function addOrder($field, $direction = 'DESC')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addOrder');
        return $pluginInfo ? $this->___callPlugins('addOrder', func_get_args(), $pluginInfo) : parent::addOrder($field, $direction);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
