<?php
namespace PayPal\Braintree\Controller\Paypal\Review;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Paypal\Review
 */
class Interceptor extends \PayPal\Braintree\Controller\Paypal\Review implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \PayPal\Braintree\Gateway\Config\PayPal\Config $config, \Magento\Checkout\Model\Session $checkoutSession, \PayPal\Braintree\Model\Paypal\Helper\QuoteUpdater $quoteUpdater, \Magento\Framework\Serialize\Serializer\Json $json)
    {
        $this->___init();
        parent::__construct($context, $config, $checkoutSession, $quoteUpdater, $json);
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
