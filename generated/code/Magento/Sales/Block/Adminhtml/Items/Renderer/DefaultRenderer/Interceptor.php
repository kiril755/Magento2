<?php
namespace Magento\Sales\Block\Adminhtml\Items\Renderer\DefaultRenderer;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Items\Renderer\DefaultRenderer
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Items\Renderer\DefaultRenderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\Framework\Registry $registry, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $stockRegistry, $stockConfiguration, $registry, $data);
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
