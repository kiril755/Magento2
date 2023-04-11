<?php
namespace Magento\CurrencySymbol\Controller\Adminhtml\System\Currencysymbol\Save;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Controller\Adminhtml\System\Currencysymbol\Save
 */
class Interceptor extends \Magento\CurrencySymbol\Controller\Adminhtml\System\Currencysymbol\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $currencySymbolFactory)
    {
        $this->___init();
        parent::__construct($context, $filterManager, $currencySymbolFactory);
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
