<?php
namespace Magento\Customer\ViewModel\CreateAccountButton;

/**
 * Interceptor class for @see \Magento\Customer\ViewModel\CreateAccountButton
 */
class Interceptor extends \Magento\Customer\ViewModel\CreateAccountButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function disabled() : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'disabled');
        return $pluginInfo ? $this->___callPlugins('disabled', func_get_args(), $pluginInfo) : parent::disabled();
    }
}
