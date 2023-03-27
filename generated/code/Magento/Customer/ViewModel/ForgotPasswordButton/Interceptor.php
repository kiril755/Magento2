<?php
namespace Magento\Customer\ViewModel\ForgotPasswordButton;

/**
 * Interceptor class for @see \Magento\Customer\ViewModel\ForgotPasswordButton
 */
class Interceptor extends \Magento\Customer\ViewModel\ForgotPasswordButton implements \Magento\Framework\Interception\InterceptorInterface
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
