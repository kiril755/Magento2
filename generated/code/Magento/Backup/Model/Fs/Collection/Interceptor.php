<?php
namespace Magento\Backup\Model\Fs\Collection;

/**
 * Interceptor class for @see \Magento\Backup\Model\Fs\Collection
 */
class Interceptor extends \Magento\Backup\Model\Fs\Collection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactory $entityFactory, \Magento\Backup\Helper\Data $backupData, \Magento\Framework\Filesystem $filesystem, \Magento\Backup\Model\Backup $backup)
    {
        $this->___init();
        parent::__construct($entityFactory, $backupData, $filesystem, $backup);
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
