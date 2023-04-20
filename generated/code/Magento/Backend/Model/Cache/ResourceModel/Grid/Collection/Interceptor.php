<?php
namespace Magento\Backend\Model\Cache\ResourceModel\Grid\Collection;

/**
 * Interceptor class for @see \Magento\Backend\Model\Cache\ResourceModel\Grid\Collection
 */
class Interceptor extends \Magento\Backend\Model\Cache\ResourceModel\Grid\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList)
    {
        $this->___init();
        parent::__construct($entityFactory, $cacheTypeList);
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
