<?php
namespace Magento\MediaGallery\Model\Directory\Command\DeleteByPaths;

/**
 * Interceptor class for @see \Magento\MediaGallery\Model\Directory\Command\DeleteByPaths
 */
class Interceptor extends \Magento\MediaGallery\Model\Directory\Command\DeleteByPaths implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Cms\Model\Wysiwyg\Images\Storage $storage, \Magento\MediaGalleryApi\Api\IsPathExcludedInterface $isPathExcluded)
    {
        $this->___init();
        parent::__construct($logger, $storage, $isPathExcluded);
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
