<?php
namespace Magento\MediaGallerySynchronization\Model\Consume;

/**
 * Interceptor class for @see \Magento\MediaGallerySynchronization\Model\Consume
 */
class Interceptor extends \Magento\MediaGallerySynchronization\Model\Consume implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaGallerySynchronizationApi\Api\SynchronizeInterface $synchronize, \Magento\MediaGallerySynchronizationApi\Api\SynchronizeFilesInterface $synchronizeFiles)
    {
        $this->___init();
        parent::__construct($synchronize, $synchronizeFiles);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $paths) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($paths);
    }
}
