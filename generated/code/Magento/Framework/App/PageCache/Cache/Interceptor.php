<?php
namespace Magento\Framework\App\PageCache\Cache;

/**
 * Interceptor class for @see \Magento\Framework\App\PageCache\Cache
 */
class Interceptor extends \Magento\Framework\App\PageCache\Cache implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Frontend\Pool $frontendPool, $cacheIdentifier = null)
    {
        $this->___init();
        parent::__construct($frontendPool, $cacheIdentifier);
    }

    /**
     * {@inheritdoc}
     */
    public function load($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'load');
        return $pluginInfo ? $this->___callPlugins('load', func_get_args(), $pluginInfo) : parent::load($identifier);
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $identifier, $tags = [], $lifeTime = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($data, $identifier, $tags, $lifeTime);
    }
}
