<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\NewCategory;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\NewCategory
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\NewCategory implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Catalog\Model\CategoryFactory $categoryFactory, array $data = [], ?\Magento\Framework\View\Helper\SecureHtmlRenderer $htmlRenderer = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $jsonEncoder, $categoryFactory, $data, $htmlRenderer);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}
