<?php
namespace Magento\Webapi\Model\Cache\Type\Webapi;

/**
 * Interceptor class for @see \Magento\Webapi\Model\Cache\Type\Webapi
 */
class Interceptor extends \Magento\Webapi\Model\Cache\Type\Webapi implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Cache\Type\FrontendPool $cacheFrontendPool, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Authorization\Model\UserContextInterface $userContext)
    {
        $this->___init();
        parent::__construct($cacheFrontendPool, $storeManager, $userContext);
    }

    /**
     * {@inheritdoc}
     */
    public function save($data, $identifier, array $tags = [], $lifeTime = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save($data, $identifier, $tags, $lifeTime);
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
    public function remove($identifier)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'remove');
        return $pluginInfo ? $this->___callPlugins('remove', func_get_args(), $pluginInfo) : parent::remove($identifier);
    }
}
