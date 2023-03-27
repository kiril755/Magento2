<?php
namespace Magento\Framework\Indexer\CacheContext;

/**
 * Interceptor class for @see \Magento\Framework\Indexer\CacheContext
 */
class Interceptor extends \Magento\Framework\Indexer\CacheContext implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
    }

    /**
     * {@inheritdoc}
     */
    public function registerEntities($cacheTag, $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerEntities');
        return $pluginInfo ? $this->___callPlugins('registerEntities', func_get_args(), $pluginInfo) : parent::registerEntities($cacheTag, $ids);
    }

    /**
     * {@inheritdoc}
     */
    public function registerTags($cacheTags)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'registerTags');
        return $pluginInfo ? $this->___callPlugins('registerTags', func_get_args(), $pluginInfo) : parent::registerTags($cacheTags);
    }
}
