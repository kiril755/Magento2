<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Asset\GetMediaGalleryAsset;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Asset\GetMediaGalleryAsset
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\Asset\GetMediaGalleryAsset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\AdobeStockImageAdminUi\Model\Asset\GetMediaGalleryAssetByAdobeId $getAssetByAdobeId)
    {
        $this->___init();
        parent::__construct($context, $logger, $getAssetByAdobeId);
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
