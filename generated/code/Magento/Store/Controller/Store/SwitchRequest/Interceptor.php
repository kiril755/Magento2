<?php
namespace Magento\Store\Controller\Store\SwitchRequest;

/**
 * Interceptor class for @see \Magento\Store\Controller\Store\SwitchRequest
 */
class Interceptor extends \Magento\Store\Controller\Store\SwitchRequest implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $session, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Store\Model\StoreSwitcher\HashGenerator $hashGenerator, \Magento\Framework\Url\DecoderInterface $urlDecoder)
    {
        $this->___init();
        parent::__construct($context, $session, $customerRepository, $hashGenerator, $urlDecoder);
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
