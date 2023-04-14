<?php
namespace Magento\Framework\Data\Form\Element\Fieldset;

/**
 * Interceptor class for @see \Magento\Framework\Data\Form\Element\Fieldset
 */
class Interceptor extends \Magento\Framework\Data\Form\Element\Fieldset implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\Element\Factory $factoryElement, \Magento\Framework\Data\Form\Element\CollectionFactory $factoryCollection, \Magento\Framework\Escaper $escaper, $data = [])
    {
        $this->___init();
        parent::__construct($factoryElement, $factoryCollection, $escaper, $data);
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
