<?php
namespace Magento\Reports\Model\ResourceModel\Product\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Product\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Product\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Eav\Model\Config $eavConfig, \Magento\Framework\App\ResourceConnection $resource, \Magento\Eav\Model\EntityFactory $eavEntityFactory, \Magento\Catalog\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Validator\UniversalFactory $universalFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Module\Manager $moduleManager, \Magento\Catalog\Model\Indexer\Product\Flat\State $catalogProductFlatState, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Catalog\Model\ResourceModel\Url $catalogUrl, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Catalog\Model\ResourceModel\Product $product, \Magento\Reports\Model\Event\TypeFactory $eventTypeFactory, \Magento\Catalog\Model\Product\Type $productType, \Magento\Quote\Model\ResourceModel\Quote\Collection $quoteResource, ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Catalog\Model\ResourceModel\Product\Collection\ProductLimitationFactory $productLimitationFactory = null, ?\Magento\Framework\EntityManager\MetadataPool $metadataPool = null, ?\Magento\Catalog\Model\Indexer\Category\Product\TableMaintainer $tableMaintainer = null, ?\Magento\Catalog\Model\Indexer\Product\Price\PriceTableResolver $priceTableResolver = null, ?\Magento\Framework\Indexer\DimensionFactory $dimensionFactory = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $eavConfig, $resource, $eavEntityFactory, $resourceHelper, $universalFactory, $storeManager, $moduleManager, $catalogProductFlatState, $scopeConfig, $productOptionFactory, $catalogUrl, $localeDate, $customerSession, $dateTime, $groupManagement, $product, $eventTypeFactory, $productType, $quoteResource, $connection, $productLimitationFactory, $metadataPool, $tableMaintainer, $priceTableResolver, $dimensionFactory);
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
