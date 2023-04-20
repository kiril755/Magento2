<?php
namespace Magento\AsynchronousOperations\Model\MassConsumerEnvelopeCallback;

/**
 * Interceptor class for @see \Magento\AsynchronousOperations\Model\MassConsumerEnvelopeCallback
 */
class Interceptor extends \Magento\AsynchronousOperations\Model\MassConsumerEnvelopeCallback implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource, \Magento\Framework\MessageQueue\MessageController $messageController, \Magento\Framework\MessageQueue\ConsumerConfigurationInterface $configuration, \Magento\AsynchronousOperations\Model\OperationProcessorFactory $operationProcessorFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\MessageQueue\QueueInterface $queue, ?\Magento\AsynchronousOperations\Model\MessageControllerDecorator $messageControllerDecorator = null)
    {
        $this->___init();
        parent::__construct($resource, $messageController, $configuration, $operationProcessorFactory, $logger, $queue, $messageControllerDecorator);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\MessageQueue\EnvelopeInterface $message)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($message);
    }
}
