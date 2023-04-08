<?php
namespace Magento\InventoryConfigurableProductAdminUi\Block\Adminhtml\Product\Steps\Bulk;

/**
 * Interceptor class for @see \Magento\InventoryConfigurableProductAdminUi\Block\Adminhtml\Product\Steps\Bulk
 */
class Interceptor extends \Magento\InventoryConfigurableProductAdminUi\Block\Adminhtml\Product\Steps\Bulk implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Catalog\Helper\Image $image, \Magento\Catalog\Model\Product\Media\Config $catalogProductMediaConfig, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Framework\Config\DataInterfaceFactory $configFactory, \Magento\Framework\Serialize\Serializer\Json $jsonSerializer, \Magento\Framework\View\Element\UiComponentFactory $uiComponentFactory, \Magento\Framework\View\Element\UiComponent\ContextFactory $contextFactory)
    {
        $this->___init();
        parent::__construct($context, $image, $catalogProductMediaConfig, $productFactory, $configFactory, $jsonSerializer, $uiComponentFactory, $contextFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function setTemplate($template)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setTemplate');
        return $pluginInfo ? $this->___callPlugins('setTemplate', func_get_args(), $pluginInfo) : parent::setTemplate($template);
    }
}
