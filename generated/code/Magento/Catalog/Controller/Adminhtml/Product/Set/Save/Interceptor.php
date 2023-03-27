<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Set\Save;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Set\Save
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Set\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\LayoutFactory $layoutFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, ?\Magento\Eav\Model\Entity\Attribute\SetFactory $attributeSetFactory = null, ?\Magento\Framework\Filter\FilterManager $filterManager = null, ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $coreRegistry, $layoutFactory, $resultJsonFactory, $attributeSetFactory, $filterManager, $jsonHelper);
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
