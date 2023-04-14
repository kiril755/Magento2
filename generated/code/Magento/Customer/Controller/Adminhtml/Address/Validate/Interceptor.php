<?php
namespace Magento\Customer\Controller\Adminhtml\Address\Validate;

/**
 * Interceptor class for @see \Magento\Customer\Controller\Adminhtml\Address\Validate
 */
class Interceptor extends \Magento\Customer\Controller\Adminhtml\Address\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Customer\Model\Metadata\FormFactory $formFactory, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null, ?\Magento\Customer\Model\CustomerRegistry $customerRegistry = null)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $formFactory, $storeManager, $customerRegistry);
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
