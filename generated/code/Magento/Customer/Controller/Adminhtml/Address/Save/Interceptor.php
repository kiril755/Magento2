<?php
namespace Magento\Customer\Controller\Adminhtml\Address\Save;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Address\Save
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Address\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Customer\Model\Metadata\FormFactory $formFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Api\DataObjectHelper $dataObjectHelper, \Magento\Customer\Api\Data\AddressInterfaceFactory $addressDataFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Customer\Model\CustomerRegistry $customerRegistry = null)
    {
        $this->___init();
        parent::__construct($context, $addressRepository, $formFactory, $customerRepository, $dataObjectHelper, $addressDataFactory, $logger, $resultJsonFactory, $storeManager, $customerRegistry);
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
