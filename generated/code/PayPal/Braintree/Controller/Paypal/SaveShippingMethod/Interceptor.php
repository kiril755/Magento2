<?php
namespace PayPal\Braintree\Controller\Paypal\SaveShippingMethod;

/**
 * Interceptor class for @see \PayPal\Braintree\Controller\Paypal\SaveShippingMethod
 */
class Interceptor extends \PayPal\Braintree\Controller\Paypal\SaveShippingMethod implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \PayPal\Braintree\Gateway\Config\PayPal\Config $config, \Magento\Checkout\Model\Session $checkoutSession, \PayPal\Braintree\Model\Paypal\Helper\ShippingMethodUpdater $shippingMethodUpdater)
    {
        $this->___init();
        parent::__construct($context, $config, $checkoutSession, $shippingMethodUpdater);
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
