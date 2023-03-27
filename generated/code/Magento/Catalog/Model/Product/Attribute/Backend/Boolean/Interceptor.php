<?php
namespace Magento\Catalog\Model\Product\Attribute\Backend\Boolean;

/**
 * Interceptor class for @see \Magento\Catalog\Model\Product\Attribute\Backend\Boolean
 */
class Interceptor extends \Magento\Catalog\Model\Product\Attribute\Backend\Boolean implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
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
