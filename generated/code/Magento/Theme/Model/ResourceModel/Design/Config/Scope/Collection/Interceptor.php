<?php
namespace Magento\Theme\Model\ResourceModel\Design\Config\Scope\Collection;

/**
 * Interceptor class for @see \Magento\Theme\Model\ResourceModel\Design\Config\Scope\Collection
 */
class Interceptor extends \Magento\Theme\Model\ResourceModel\Design\Config\Scope\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Magento\Framework\App\ScopeTreeProviderInterface $scopeTree, \Magento\Theme\Model\Design\Config\MetadataProviderInterface $metadataProvider, \Magento\Framework\App\Config\ScopeConfigInterface $appConfig, \Magento\Theme\Model\Design\Config\ValueProcessor $valueProcessor)
    {
        $this->___init();
        parent::__construct($entityFactory, $scopeTree, $metadataProvider, $appConfig, $valueProcessor);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
