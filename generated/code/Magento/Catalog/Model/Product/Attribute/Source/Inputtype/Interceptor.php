<?php
namespace Magento\Catalog\Model\Product\Attribute\Source\Inputtype;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Source\Inputtype
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Source\Inputtype implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Framework\Registry $coreRegistry, array $optionsArray = [])
    {
        $this->___init();
        parent::__construct($eventManager, $coreRegistry, $optionsArray);
    }

    /**
     * {@inheritdoc}
     */
    public function toOptionArray()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toOptionArray');
        return $pluginInfo ? $this->___callPlugins('toOptionArray', func_get_args(), $pluginInfo) : parent::toOptionArray();
    }

    /**
     * {@inheritdoc}
     */
    public function getVolatileInputTypes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getVolatileInputTypes');
        return $pluginInfo ? $this->___callPlugins('getVolatileInputTypes', func_get_args(), $pluginInfo) : parent::getVolatileInputTypes();
    }
}
