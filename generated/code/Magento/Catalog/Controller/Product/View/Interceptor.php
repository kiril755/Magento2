<?php
namespace Magento\Catalog\Controller\Product\View;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Product\View
 */
class Interceptor extends \Magento\Catalog\Controller\Product\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Helper\Product\View $viewHelper, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Framework\View\Result\PageFactory $resultPageFactory, ?\Psr\Log\LoggerInterface $logger = null, ?\Magento\Framework\Json\Helper\Data $jsonHelper = null, ?\Magento\Catalog\Model\Design $catalogDesign = null, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null, ?\Magento\Store\Model\StoreManagerInterface $storeManager = null)
    {
        $this->___init();
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory, $logger, $jsonHelper, $catalogDesign, $productRepository, $storeManager);
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
