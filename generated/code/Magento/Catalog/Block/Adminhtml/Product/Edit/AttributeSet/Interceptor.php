<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\AttributeSet;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\AttributeSet
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\AttributeSet implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, array $data = [], ?\Magento\Framework\Json\Helper\Data $jsonHelper = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $jsonHelper);
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
