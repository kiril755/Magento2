<?php
namespace Magento\MediaGalleryUi\Model\GetDetailsByAssetId;

/**
 * Interceptor class for @see \Magento\MediaGalleryUi\Model\GetDetailsByAssetId
 */
class Interceptor extends \Magento\MediaGalleryUi\Model\GetDetailsByAssetId implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\MediaGalleryUi\Model\GetAssetDetails $getAssetDetails, \Magento\MediaGalleryApi\Api\GetAssetsByIdsInterface $getAssetById, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\MediaGalleryUi\Ui\Component\Listing\Columns\SourceIconProvider $sourceIconProvider, \Magento\MediaGalleryApi\Api\GetAssetsKeywordsInterface $getAssetKeywords)
    {
        $this->___init();
        parent::__construct($getAssetDetails, $getAssetById, $storeManager, $sourceIconProvider, $getAssetKeywords);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $assetIds) : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($assetIds);
    }
}
