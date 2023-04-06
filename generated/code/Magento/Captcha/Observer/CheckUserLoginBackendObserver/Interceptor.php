<?php
namespace Magento\Captcha\Observer\CheckUserLoginBackendObserver;

/**
 * Interceptor class for @see \Magento\Captcha\Observer\CheckUserLoginBackendObserver
 */
class Interceptor extends \Magento\Captcha\Observer\CheckUserLoginBackendObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Captcha\Helper\Data $helper, \Magento\Captcha\Observer\CaptchaStringResolver $captchaStringResolver, \Magento\Framework\App\RequestInterface $request)
    {
        $this->___init();
        parent::__construct($helper, $captchaStringResolver, $request);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}
