<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Toolbar\Main\Filter;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Toolbar\Main\Filter
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Attribute\Set\Toolbar\Main\Filter implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Eav\Model\Entity\Attribute\SetFactory $setFactory, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $setFactory, $data);
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
