<?php
namespace Magento\Indexer\Model\Mview\View\State;

/**
 * Interceptor class for @see \Magento\Indexer\Model\Mview\View\State
 */
class Interceptor extends \Magento\Indexer\Model\Mview\View\State implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Indexer\Model\ResourceModel\Mview\View\State $resource, \Magento\Indexer\Model\ResourceModel\Mview\View\State\Collection $resourceCollection, array $data = [], ?\Magento\Framework\Lock\LockManagerInterface $lockManager = null, ?\Magento\Framework\App\DeploymentConfig $configReader = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $resource, $resourceCollection, $data, $lockManager, $configReader);
    }

    /**
     * {@inheritdoc}
     */
    public function setStatus($status)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setStatus');
        return $pluginInfo ? $this->___callPlugins('setStatus', func_get_args(), $pluginInfo) : parent::setStatus($status);
    }
}
