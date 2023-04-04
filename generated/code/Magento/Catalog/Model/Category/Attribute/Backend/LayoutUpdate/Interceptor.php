<?php
namespace Magento\Catalog\Model\Category\Attribute\Backend\LayoutUpdate;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Category\Attribute\Backend\LayoutUpdate
 */
class Interceptor extends \Magento\Catalog\Model\Category\Attribute\Backend\LayoutUpdate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Catalog\Model\Category\Attribute\LayoutUpdateManager $manager)
    {
        $this->___init();
        parent::__construct($manager);
    }

    /**
     * {@inheritdoc}
     */
    public function validate($object)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($object);
    }
}
