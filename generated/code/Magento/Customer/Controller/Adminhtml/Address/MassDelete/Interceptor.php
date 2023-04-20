<?php
namespace Magento\Customer\Controller\Adminhtml\Address\MassDelete;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Address\MassDelete
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Address\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Customer\Model\ResourceModel\Address\CollectionFactory $collectionFactory, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $addressRepository, $logger, $resultJsonFactory);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\Controller\Result\Json
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
