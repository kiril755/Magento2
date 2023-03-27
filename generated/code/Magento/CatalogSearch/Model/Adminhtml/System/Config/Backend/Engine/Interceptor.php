<?php
namespace Magento\CatalogSearch\Model\Adminhtml\System\Config\Backend\Engine;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Model\Adminhtml\System\Config\Backend\Engine
 */
class Interceptor extends \Magento\CatalogSearch\Model\Adminhtml\System\Config\Backend\Engine implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $config, \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, ?\Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, ?\Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = [], ?\Magento\Framework\Search\EngineResolverInterface $engineResolver = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $config, $cacheTypeList, $indexerRegistry, $resource, $resourceCollection, $data, $engineResolver);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        return $pluginInfo ? $this->___callPlugins('afterSave', func_get_args(), $pluginInfo) : parent::afterSave();
    }

    /**
     * {@inheritdoc}
     */
    public function save()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'save');
        return $pluginInfo ? $this->___callPlugins('save', func_get_args(), $pluginInfo) : parent::save();
    }
}
