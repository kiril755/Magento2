<?php
namespace Magento\Customer\Model\Customer\Attribute\Backend\Billing;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\Attribute\Backend\Billing
 */
class Interceptor extends \Magento\Customer\Model\Customer\Attribute\Backend\Billing implements \Magento\Framework\Interception\InterceptorInterface
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
