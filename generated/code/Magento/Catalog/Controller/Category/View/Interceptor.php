<?php
namespace Magento\Catalog\Controller\Category\View;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Category\View
 */
class Interceptor extends \Magento\Catalog\Controller\Category\View implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Catalog\Model\Design $catalogDesign, \Magento\Catalog\Model\Session $catalogSession, \Magento\Framework\Registry $coreRegistry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\CatalogUrlRewrite\Model\CategoryUrlPathGenerator $categoryUrlPathGenerator, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory, \Magento\Catalog\Model\Layer\Resolver $layerResolver, \Magento\Catalog\Api\CategoryRepositoryInterface $categoryRepository, ?\Magento\Catalog\Model\Product\ProductList\ToolbarMemorizer $toolbarMemorizer = null, ?\Magento\Catalog\Model\Category\Attribute\LayoutUpdateManager $layoutUpdateManager = null, ?\Magento\Catalog\Helper\Category $categoryHelper = null, ?\Psr\Log\LoggerInterface $logger = null)
    {
        $this->___init();
        parent::__construct($context, $catalogDesign, $catalogSession, $coreRegistry, $storeManager, $categoryUrlPathGenerator, $resultPageFactory, $resultForwardFactory, $layerResolver, $categoryRepository, $toolbarMemorizer, $layoutUpdateManager, $categoryHelper, $logger);
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

    /**
     * {@inheritdoc}
     */
    public function getActionFlag()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getActionFlag');
        return $pluginInfo ? $this->___callPlugins('getActionFlag', func_get_args(), $pluginInfo) : parent::getActionFlag();
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRequest');
        return $pluginInfo ? $this->___callPlugins('getRequest', func_get_args(), $pluginInfo) : parent::getRequest();
    }

    /**
     * {@inheritdoc}
     */
    public function getResponse()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getResponse');
        return $pluginInfo ? $this->___callPlugins('getResponse', func_get_args(), $pluginInfo) : parent::getResponse();
    }
}
