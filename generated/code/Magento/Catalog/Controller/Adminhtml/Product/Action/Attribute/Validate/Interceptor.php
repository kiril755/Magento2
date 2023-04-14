<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Validate;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Validate
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Action\Attribute\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Catalog\Helper\Product\Edit\Action\Attribute $attributeHelper, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, ?\Magento\Eav\Model\Config $eavConfig = null)
    {
        $this->___init();
        parent::__construct($context, $attributeHelper, $resultJsonFactory, $layoutFactory, $eavConfig);
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
