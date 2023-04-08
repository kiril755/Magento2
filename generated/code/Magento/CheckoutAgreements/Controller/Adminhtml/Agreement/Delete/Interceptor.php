<?php
namespace Magento\CheckoutAgreements\Controller\Adminhtml\Agreement\Delete;

/**
 * Interceptor class for @see \Magento\CheckoutAgreements\Controller\Adminhtml\Agreement\Delete
 */
class Interceptor extends \Magento\CheckoutAgreements\Controller\Adminhtml\Agreement\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, ?\Magento\CheckoutAgreements\Api\CheckoutAgreementsRepositoryInterface $agreementRepository = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $agreementRepository);
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
