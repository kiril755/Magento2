<?php
namespace Magento\Customer\Model\ResourceModel\Group\Grid\ServiceCollection;

/**
 * Interceptor class for @see \Magento\Customer\Model\ResourceModel\Group\Grid\ServiceCollection
 */
class Interceptor extends \Magento\Customer\Model\ResourceModel\Group\Grid\ServiceCollection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\SortOrderBuilder $sortOrderBuilder, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Framework\Api\SimpleDataObjectConverter $simpleDataObjectConverter)
    {
        $this->___init();
        parent::__construct($entityFactory, $filterBuilder, $searchCriteriaBuilder, $sortOrderBuilder, $groupRepository, $simpleDataObjectConverter);
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
