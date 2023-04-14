<?php
namespace Magento\Customer\Controller\Address\File\Upload;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Address\File\Upload
 */
class Interceptor extends \Magento\Customer\Controller\Address\File\Upload implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\FileUploaderFactory $fileUploaderFactory, \Magento\Customer\Api\AddressMetadataInterface $addressMetadataService, \Psr\Log\LoggerInterface $logger, \Magento\Customer\Model\FileProcessorFactory $fileProcessorFactory)
    {
        $this->___init();
        parent::__construct($context, $fileUploaderFactory, $addressMetadataService, $logger, $fileProcessorFactory);
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
