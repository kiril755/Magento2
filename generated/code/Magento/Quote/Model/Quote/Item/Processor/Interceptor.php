<?php
namespace Magento\Quote\Model\Quote\Item\Processor;

/**
 * Interceptor class for @see \Magento\Quote\Model\Quote\Item\Processor
 */
class Interceptor extends \Magento\Quote\Model\Quote\Item\Processor implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Quote\Model\Quote\ItemFactory $quoteItemFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\App\State $appState)
    {
        $this->___init();
        parent::__construct($quoteItemFactory, $storeManager, $appState);
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Magento\Quote\Model\Quote\Item $source, \Magento\Quote\Model\Quote\Item $target) : \Magento\Quote\Model\Quote\Item
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'merge');
        return $pluginInfo ? $this->___callPlugins('merge', func_get_args(), $pluginInfo) : parent::merge($source, $target);
    }
}
