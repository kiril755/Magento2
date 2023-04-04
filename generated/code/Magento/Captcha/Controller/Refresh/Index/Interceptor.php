<?php
namespace Magento\Captcha\Controller\Refresh\Index;

/**
 * Interceptor class for @see \Magento\Captcha\Controller\Refresh\Index
 */
class Interceptor extends \Magento\Captcha\Controller\Refresh\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\RequestInterface $request, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Magento\Captcha\Helper\Data $captchaHelper, \Magento\Framework\View\LayoutInterface $layout, \Magento\Framework\Serialize\Serializer\Json $serializer)
    {
        $this->___init();
        parent::__construct($context, $request, $jsonFactory, $captchaHelper, $layout, $serializer);
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
