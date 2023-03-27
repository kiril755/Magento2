<?php
namespace Magento\Tax\Model\TaxRateCollection;

/**
 * Interceptor class for @see \Magento\Tax\Model\TaxRateCollection
 */
class Interceptor extends \Magento\Tax\Model\TaxRateCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder, \Magento\Tax\Api\TaxRateRepositoryInterface $rateService, \Magento\Tax\Model\Calculation\Rate\Converter $rateConverter)
    {
        $this->___init();
        parent::__construct($entityFactory, $filterBuilder, $searchCriteriaBuilder, $sortOrderBuilder, $rateService, $rateConverter);
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
