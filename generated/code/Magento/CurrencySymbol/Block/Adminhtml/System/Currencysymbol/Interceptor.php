<?php
namespace Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol
 */
class Interceptor extends \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $symbolSystemFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $symbolSystemFactory, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
