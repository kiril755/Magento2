<?php
namespace Magento\Paypal\Controller\Transparent\Response;

/**
 * Interceptor class for @see \Magento\Paypal\Controller\Transparent\Response
 */
class Interceptor extends \Magento\Paypal\Controller\Transparent\Response implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Paypal\Model\Payflow\Service\Response\Transaction $transaction, \Magento\Paypal\Model\Payflow\Service\Response\Validator\ResponseValidator $responseValidator, \Magento\Framework\View\Result\LayoutFactory $resultLayoutFactory, \Magento\Paypal\Model\Payflow\Transparent $transparent, ?\Magento\Framework\Session\SessionManager $sessionTransparent = null, ?\Magento\Sales\Api\PaymentFailuresInterface $paymentFailures = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $transaction, $responseValidator, $resultLayoutFactory, $transparent, $sessionTransparent, $paymentFailures);
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
