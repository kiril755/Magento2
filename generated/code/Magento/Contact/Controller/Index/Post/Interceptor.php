<?php
namespace Magento\Contact\Controller\Index\Post;

/**
 * Interceptor class for @see \Magento\Contact\Controller\Index\Post
 */
class Interceptor extends \Magento\Contact\Controller\Index\Post implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Contact\Model\ConfigInterface $contactsConfig, \Magento\Contact\Model\MailInterface $mail, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $contactsConfig, $mail, $dataPersistor, $logger);
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
