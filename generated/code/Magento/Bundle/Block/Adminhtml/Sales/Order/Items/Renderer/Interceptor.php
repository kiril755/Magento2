<?php
namespace Magento\Bundle\Block\Adminhtml\Sales\Order\Items\Renderer;

/**
 * Interceptor class for @see \Magento\Bundle\Block\Adminhtml\Sales\Order\Items\Renderer
 */
class Interceptor extends \Magento\Bundle\Block\Adminhtml\Sales\Order\Items\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Framework\Serialize\Serializer\Json $serializer = null, ?\Magento\Catalog\Helper\Data $catalogHelper = null)
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $data, $serializer, $catalogHelper);
    }

    /**
     * {@inheritdoc}
     */
    public function canReturnItemToStock($item = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canReturnItemToStock');
        return $pluginInfo ? $this->___callPlugins('canReturnItemToStock', func_get_args(), $pluginInfo) : parent::canReturnItemToStock($item);
    }
}
