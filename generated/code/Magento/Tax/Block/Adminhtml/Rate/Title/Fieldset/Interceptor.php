<?php
namespace Magento\Tax\Block\Adminhtml\Rate\Title\Fieldset;

/**
 * Interceptor class for @see \Magento\Tax\Block\Adminhtml\Rate\Title\Fieldset
 */
class Interceptor extends \Magento\Tax\Block\Adminhtml\Rate\Title\Fieldset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\Element\Factory $factoryElement, \Magento\Framework\Data\Form\Element\CollectionFactory $factoryCollection, \Magento\Framework\Escaper $escaper, \Magento\Tax\Block\Adminhtml\Rate\Title $title, $data = [])
    {
        $this->___init();
        parent::__construct($factoryElement, $factoryCollection, $escaper, $title, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function addField($elementId, $type, $config, $after = false, $isAdvanced = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addField');
        return $pluginInfo ? $this->___callPlugins('addField', func_get_args(), $pluginInfo) : parent::addField($elementId, $type, $config, $after, $isAdvanced);
    }
}
