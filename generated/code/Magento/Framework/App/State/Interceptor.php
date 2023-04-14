<?php
namespace Magento\Framework\App\State;

/**
 * Interceptor class for @see \Magento\Framework\App\State
 */
class Interceptor extends \Magento\Framework\App\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Config\ScopeInterface $configScope, $mode = 'default')
    {
        $this->___init();
        parent::__construct($configScope, $mode);
    }

    /**
     * {@inheritdoc}
     */
    public function setAreaCode($code)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAreaCode');
        return $pluginInfo ? $this->___callPlugins('setAreaCode', func_get_args(), $pluginInfo) : parent::setAreaCode($code);
    }
}
