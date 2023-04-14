<?php
namespace Magento\MediaGalleryUi\Controller\Adminhtml\Asset\Search;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Controller\Adminhtml\Asset\Search
 */
class Interceptor extends \Magento\MediaGalleryUi\Controller\Adminhtml\Asset\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\Search\FilterGroupBuilder $filterGroupBuilder, \Magento\MediaGalleryApi\Api\SearchAssetsInterface $searchAssets, \Magento\Backend\App\Action\Context $context, \Psr\Log\LoggerInterface $logger, \Magento\Cms\Helper\Wysiwyg\Images $images, \Magento\Cms\Model\Wysiwyg\Images\Storage $storage)
    {
        $this->___init();
        parent::__construct($filterBuilder, $searchCriteriaBuilder, $filterGroupBuilder, $searchAssets, $context, $logger, $images, $storage);
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
