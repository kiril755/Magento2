<?php
namespace Magento\Catalog\Controller\Adminhtml\Product\Attribute\Save;

/**
 * Interceptor class for @see \Magento\Catalog\Controller\Adminhtml\Product\Attribute\Save
 */
class Interceptor extends \Magento\Catalog\Controller\Adminhtml\Product\Attribute\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\Cache\FrontendInterface $attributeLabelCache, \Magento\Framework\Registry $coreRegistry, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \Magento\Catalog\Model\Product\AttributeSet\BuildFactory $buildFactory, \Magento\Catalog\Model\ResourceModel\Eav\AttributeFactory $attributeFactory, \Magento\Eav\Model\Adminhtml\System\Config\Source\Inputtype\ValidatorFactory $validatorFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Group\CollectionFactory $groupCollectionFactory, \Magento\Framework\Filter\FilterManager $filterManager, \Magento\Catalog\Helper\Product $productHelper, \Magento\Framework\View\LayoutFactory $layoutFactory, ?\Magento\Catalog\Model\Product\Attribute\Frontend\Inputtype\Presentation $presentation = null, ?\Magento\Framework\Serialize\Serializer\FormData $formDataSerializer = null)
    {
        $this->___init();
        parent::__construct($context, $attributeLabelCache, $coreRegistry, $resultPageFactory, $buildFactory, $attributeFactory, $validatorFactory, $groupCollectionFactory, $filterManager, $productHelper, $layoutFactory, $presentation, $formDataSerializer);
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
