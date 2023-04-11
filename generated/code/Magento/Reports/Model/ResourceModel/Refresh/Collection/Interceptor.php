<?php
namespace Magento\Reports\Model\ResourceModel\Refresh\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\ResourceModel\Refresh\Collection
 */
class Interceptor extends \Magento\Reports\Model\ResourceModel\Refresh\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Reports\Model\FlagFactory $reportsFlagFactory)
    {
        $this->___init();
        parent::__construct($entityFactory, $localeDate, $reportsFlagFactory);
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
