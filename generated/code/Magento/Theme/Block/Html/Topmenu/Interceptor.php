<?php
namespace Magento\Theme\Block\Html\Topmenu;

/**
 * Interceptor class for @see \Magento\Theme\Block\Html\Topmenu
 */
class Interceptor extends \Magento\Theme\Block\Html\Topmenu implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Data\Tree\NodeFactory $nodeFactory, \Magento\Framework\Data\TreeFactory $treeFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $nodeFactory, $treeFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml($outermostClass = '', $childrenWrapClass = '', $limit = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtml');
        return $pluginInfo ? $this->___callPlugins('getHtml', func_get_args(), $pluginInfo) : parent::getHtml($outermostClass, $childrenWrapClass, $limit);
    }

    /**
     * {@inheritdoc}
     */
    public function getIdentities()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIdentities');
        return $pluginInfo ? $this->___callPlugins('getIdentities', func_get_args(), $pluginInfo) : parent::getIdentities();
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheKeyInfo()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCacheKeyInfo');
        return $pluginInfo ? $this->___callPlugins('getCacheKeyInfo', func_get_args(), $pluginInfo) : parent::getCacheKeyInfo();
    }
}
