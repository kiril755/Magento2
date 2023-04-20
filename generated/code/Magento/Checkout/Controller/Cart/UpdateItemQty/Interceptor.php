<?php
namespace Magento\Checkout\Controller\Cart\UpdateItemQty;

/**
 * Interceptor class for @see \Magento\Checkout\Controller\Cart\UpdateItemQty
 */
class Interceptor extends \Magento\Checkout\Controller\Cart\UpdateItemQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Checkout\Model\Cart\RequestQuantityProcessor $quantityProcessor, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Framework\Serialize\Serializer\Json $json, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $quantityProcessor, $formKeyValidator, $checkoutSession, $json, $logger);
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
