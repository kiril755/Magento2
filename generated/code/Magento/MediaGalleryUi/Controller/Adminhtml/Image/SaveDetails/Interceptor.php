<?php
namespace Magento\MediaGalleryUi\Controller\Adminhtml\Image\SaveDetails;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Controller\Adminhtml\Image\SaveDetails
 */
class Interceptor extends \Magento\MediaGalleryUi\Controller\Adminhtml\Image\SaveDetails implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\MediaGalleryMetadataApi\Api\Data\MetadataInterfaceFactory $metadataFactory, \Magento\MediaGalleryUi\Model\UpdateAsset $updateAsset, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $metadataFactory, $updateAsset, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}
