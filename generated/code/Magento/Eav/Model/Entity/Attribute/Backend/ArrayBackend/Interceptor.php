<?php
namespace Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Backend\ArrayBackend implements \Magento\Framework\Interception\InterceptorInterface
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
