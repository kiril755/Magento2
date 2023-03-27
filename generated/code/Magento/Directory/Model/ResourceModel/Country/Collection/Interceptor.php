<?php
namespace Magento\Directory\Model\ResourceModel\Country\Collection;

/**
 * Interceptor class for @see \Magento\Directory\Model\ResourceModel\Country\Collection
 */
class Interceptor extends \Magento\Directory\Model\ResourceModel\Country\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Locale\ListsInterface $localeLists, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Directory\Model\ResourceModel\CountryFactory $countryFactory, \Magento\Framework\Stdlib\ArrayUtils $arrayUtils, \Magento\Framework\Locale\ResolverInterface $localeResolver, \Magento\Framework\App\Helper\AbstractHelper $helperData, array $countriesWithNotRequiredStates = [], ?\Magento\Framework\DB\Adapter\AdapterInterface $connection = null, ?\Magento\Framework\Model\ResourceModel\Db\AbstractDb $resource = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $localeLists, $scopeConfig, $countryFactory, $arrayUtils, $localeResolver, $helperData, $countriesWithNotRequiredStates, $connection, $resource, $storeManager);
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
