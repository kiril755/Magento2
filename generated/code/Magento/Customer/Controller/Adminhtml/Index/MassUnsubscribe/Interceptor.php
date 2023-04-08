<?php
namespace Magento\Customer\Controller\Adminhtml\Index\MassUnsubscribe;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Index\MassUnsubscribe
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Index\MassUnsubscribe implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $collectionFactory, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Newsletter\Model\SubscriptionManagerInterface $subscriptionManager, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Config\Share $shareConfig)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $customerRepository, $subscriptionManager, $storeManager, $shareConfig);
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
