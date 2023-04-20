<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Attribute\Validate;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Attribute\Validate
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Attribute\Validate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Cache\FrontendInterface $attributeLabelCache, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\View\LayoutFactory $layoutFactory, array $multipleAttributeList = [], ?\Magento\Framework\Serialize\Serializer\FormData $formDataSerializer = null, ?\Magento\Eav\Model\Validator\Attribute\Code $attributeCodeValidator = null, ?\Magento\Framework\Escaper $escaper = null)
    {
        $this->___init();
        parent::__construct($context, $attributeLabelCache, $coreRegistry, $resultPageFactory, $resultJsonFactory, $layoutFactory, $multipleAttributeList, $formDataSerializer, $attributeCodeValidator, $escaper);
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
