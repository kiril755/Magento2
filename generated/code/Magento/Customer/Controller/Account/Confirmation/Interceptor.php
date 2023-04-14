<?php
namespace Magento\Customer\Controller\Account\Confirmation;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Account\Confirmation
 */
class Interceptor extends \Magento\Customer\Controller\Account\Confirmation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, ?\Magento\Customer\Model\Url $customerUrl = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $resultPageFactory, $storeManager, $customerAccountManagement, $customerUrl);
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
