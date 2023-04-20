<?php
namespace Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Validate;

/**
 * Interceptor class for @see \Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Validate
 */
class Interceptor extends \Magento\Bundle\Controller\Adminhtml\Bundle\Product\Edit\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Controller\Adminhtml\Product\Builder $productBuilder, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Magento\Catalog\Model\Product\Validator $productValidator, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\CatalogUrlRewrite\Model\Product\Validator $productUrlRewriteValidator, \Magento\CatalogUrlRewrite\Model\ProductUrlPathGenerator $productUrlPathGenerator)
    {
        $this->___init();
        parent::__construct($context, $productBuilder, $dateFilter, $productValidator, $resultJsonFactory, $layoutFactory, $productFactory, $productUrlRewriteValidator, $productUrlPathGenerator);
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
