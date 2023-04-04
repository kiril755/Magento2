<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\Confirmation;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\Confirmation
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\Confirmation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeStockClientApi\Api\ClientInterface $client, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $client, $logger);
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
