<?php
namespace Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\License;

/**
 * Interceptor class for @see \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\License
 */
class Interceptor extends \Magento\AdobeStockImageAdminUi\Controller\Adminhtml\License\License implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\AdobeStockClientApi\Api\ClientInterface $client, \Magento\AdobeStockImageApi\Api\SaveLicensedImageInterface $saveLicensedImage, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($context, $client, $saveLicensedImage, $logger);
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
