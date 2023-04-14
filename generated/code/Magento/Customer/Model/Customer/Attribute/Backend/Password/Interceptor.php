<?php
namespace Magento\Customer\Model\Customer\Attribute\Backend\Password;

/**
 * Interceptor class for @see \Magento\Customer\Model\Customer\Attribute\Backend\Password
 */
class Interceptor extends \Magento\Customer\Model\Customer\Attribute\Backend\Password implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\StringUtils $string)
    {
        $this->___init();
        parent::__construct($string);
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
