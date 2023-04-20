<?php
namespace Magento\Reports\Model\Grouped\Collection;

/**
 * Interceptor class for @see \Magento\Reports\Model\Grouped\Collection
 */
class Interceptor extends \Magento\Reports\Model\Grouped\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory)
    {
        $this->___init();
        parent::__construct($entityFactory);
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
