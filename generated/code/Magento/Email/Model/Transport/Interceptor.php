<?php
namespace Magento\Email\Model\Transport;

/**
 * Interceptor class for @see \Magento\Email\Model\Transport
 */
class Interceptor extends \Magento\Email\Model\Transport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Mail\MessageInterface $message, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, $parameters = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($message, $scopeConfig, $parameters, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function sendMessage()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'sendMessage');
        return $pluginInfo ? $this->___callPlugins('sendMessage', func_get_args(), $pluginInfo) : parent::sendMessage();
    }
}
