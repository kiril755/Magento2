<?php
namespace Magento\Framework\Profiler\Driver\Standard\Stat;

/**
 * Interceptor class for @see \Magento\Framework\Profiler\Driver\Standard\Stat
 */
class Interceptor extends \Magento\Framework\Profiler\Driver\Standard\Stat implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function start($timerId, $time, $realMemory, $emallocMemory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'start');
        return $pluginInfo ? $this->___callPlugins('start', func_get_args(), $pluginInfo) : parent::start($timerId, $time, $realMemory, $emallocMemory);
    }

    /**
     * {@inheritdoc}
     */
    public function stop($timerId, $time, $realMemory, $emallocMemory)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'stop');
        return $pluginInfo ? $this->___callPlugins('stop', func_get_args(), $pluginInfo) : parent::stop($timerId, $time, $realMemory, $emallocMemory);
    }

    /**
     * {@inheritdoc}
     */
    public function get($timerId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'get');
        return $pluginInfo ? $this->___callPlugins('get', func_get_args(), $pluginInfo) : parent::get($timerId);
    }

    /**
     * {@inheritdoc}
     */
    public function fetch($timerId, $key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'fetch');
        return $pluginInfo ? $this->___callPlugins('fetch', func_get_args(), $pluginInfo) : parent::fetch($timerId, $key);
    }

    /**
     * {@inheritdoc}
     */
    public function clear($timerId = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clear');
        return $pluginInfo ? $this->___callPlugins('clear', func_get_args(), $pluginInfo) : parent::clear($timerId);
    }

    /**
     * {@inheritdoc}
     */
    public function getFilteredTimerIds(?array $thresholds = null, $filterPattern = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFilteredTimerIds');
        return $pluginInfo ? $this->___callPlugins('getFilteredTimerIds', func_get_args(), $pluginInfo) : parent::getFilteredTimerIds($thresholds, $filterPattern);
    }
}
