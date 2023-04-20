<?php
namespace Magento\Tax\Model\TaxRuleCollection;

/**
 * Interceptor class for @see \Magento\Tax\Model\TaxRuleCollection
 */
class Interceptor extends \Magento\Tax\Model\TaxRuleCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder, \Magento\Tax\Api\TaxRuleRepositoryInterface $ruleService)
    {
        $this->___init();
        parent::__construct($entityFactory, $filterBuilder, $searchCriteriaBuilder, $sortOrderBuilder, $ruleService);
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
