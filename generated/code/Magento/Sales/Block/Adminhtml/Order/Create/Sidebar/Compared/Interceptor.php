<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Sidebar\Compared;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Sidebar\Compared
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Sidebar\Compared implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Sales\Model\Config $salesConfig, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $salesConfig, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getItemQty(\Magento\Framework\DataObject $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getItemQty');
        return $pluginInfo ? $this->___callPlugins('getItemQty', func_get_args(), $pluginInfo) : parent::getItemQty($item);
    }

    /**
     * {@inheritdoc}
     */
    public function isConfigurationRequired($productType)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isConfigurationRequired');
        return $pluginInfo ? $this->___callPlugins('isConfigurationRequired', func_get_args(), $pluginInfo) : parent::isConfigurationRequired($productType);
    }
}
