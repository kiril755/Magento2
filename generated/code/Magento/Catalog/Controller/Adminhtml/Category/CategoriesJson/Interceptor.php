<?php
namespace Magento\Catalog\Controller\Adminhtml\Category\CategoriesJson;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Category\CategoriesJson
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Category\CategoriesJson implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, ?\Magento\Backend\Model\Auth\Session $authSession = null)
    {
        $this->___init();
        parent::__construct($context, $resultJsonFactory, $layoutFactory, $authSession);
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
