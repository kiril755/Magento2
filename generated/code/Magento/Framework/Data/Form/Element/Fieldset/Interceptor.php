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
    public function getElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementHtml');
        return $pluginInfo ? $this->___callPlugins('getElementHtml', func_get_args(), $pluginInfo) : parent::getElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildren');
        return $pluginInfo ? $this->___callPlugins('getChildren', func_get_args(), $pluginInfo) : parent::getChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getChildrenHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChildrenHtml');
        return $pluginInfo ? $this->___callPlugins('getChildrenHtml', func_get_args(), $pluginInfo) : parent::getChildrenHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasicChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasicChildren');
        return $pluginInfo ? $this->___callPlugins('getBasicChildren', func_get_args(), $pluginInfo) : parent::getBasicChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getBasicChildrenHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBasicChildrenHtml');
        return $pluginInfo ? $this->___callPlugins('getBasicChildrenHtml', func_get_args(), $pluginInfo) : parent::getBasicChildrenHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getCountBasicChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCountBasicChildren');
        return $pluginInfo ? $this->___callPlugins('getCountBasicChildren', func_get_args(), $pluginInfo) : parent::getCountBasicChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdvancedChildren()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdvancedChildren');
        return $pluginInfo ? $this->___callPlugins('getAdvancedChildren', func_get_args(), $pluginInfo) : parent::getAdvancedChildren();
    }

    /**
     * {@inheritdoc}
     */
    public function getAdvancedChildrenHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAdvancedChildrenHtml');
        return $pluginInfo ? $this->___callPlugins('getAdvancedChildrenHtml', func_get_args(), $pluginInfo) : parent::getAdvancedChildrenHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function hasAdvanced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasAdvanced');
        return $pluginInfo ? $this->___callPlugins('hasAdvanced', func_get_args(), $pluginInfo) : parent::hasAdvanced();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubFieldset()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubFieldset');
        return $pluginInfo ? $this->___callPlugins('getSubFieldset', func_get_args(), $pluginInfo) : parent::getSubFieldset();
    }

    /**
     * {@inheritdoc}
     */
    public function getSubFieldsetHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSubFieldsetHtml');
        return $pluginInfo ? $this->___callPlugins('getSubFieldsetHtml', func_get_args(), $pluginInfo) : parent::getSubFieldsetHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultHtml');
        return $pluginInfo ? $this->___callPlugins('getDefaultHtml', func_get_args(), $pluginInfo) : parent::getDefaultHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function addField($elementId, $type, $config, $after = false, $isAdvanced = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addField');
        return $pluginInfo ? $this->___callPlugins('addField', func_get_args(), $pluginInfo) : parent::addField($elementId, $type, $config, $after, $isAdvanced);
    }

    /**
     * {@inheritdoc}
     */
    public function addElement(\Magento\Framework\Data\Form\Element\AbstractElement $element, $after = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addElement');
        return $pluginInfo ? $this->___callPlugins('addElement', func_get_args(), $pluginInfo) : parent::addElement($element, $after);
    }

    /**
     * {@inheritdoc}
     */
    public function isAdvanced()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAdvanced');
        return $pluginInfo ? $this->___callPlugins('isAdvanced', func_get_args(), $pluginInfo) : parent::isAdvanced();
    }

    /**
     * {@inheritdoc}
     */
    public function setAdvanced($advanced)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAdvanced');
        return $pluginInfo ? $this->___callPlugins('setAdvanced', func_get_args(), $pluginInfo) : parent::setAdvanced($advanced);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getId');
        return $pluginInfo ? $this->___callPlugins('getId', func_get_args(), $pluginInfo) : parent::getId();
    }

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getType');
        return $pluginInfo ? $this->___callPlugins('getType', func_get_args(), $pluginInfo) : parent::getType();
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setId');
        return $pluginInfo ? $this->___callPlugins('setId', func_get_args(), $pluginInfo) : parent::setId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlId');
        return $pluginInfo ? $this->___callPlugins('getHtmlId', func_get_args(), $pluginInfo) : parent::getHtmlId();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getName');
        return $pluginInfo ? $this->___callPlugins('getName', func_get_args(), $pluginInfo) : parent::getName();
    }

    /**
     * {@inheritdoc}
     */
    public function setType($type)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setType');
        return $pluginInfo ? $this->___callPlugins('setType', func_get_args(), $pluginInfo) : parent::setType($type);
    }

    /**
     * {@inheritdoc}
     */
    public function setForm($form)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setForm');
        return $pluginInfo ? $this->___callPlugins('setForm', func_get_args(), $pluginInfo) : parent::setForm($form);
    }

    /**
     * {@inheritdoc}
     */
    public function removeField($elementId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeField');
        return $pluginInfo ? $this->___callPlugins('removeField', func_get_args(), $pluginInfo) : parent::removeField($elementId);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlAttributes');
        return $pluginInfo ? $this->___callPlugins('getHtmlAttributes', func_get_args(), $pluginInfo) : parent::getHtmlAttributes();
    }

    /**
     * {@inheritdoc}
     */
    public function addClass($class)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addClass');
        return $pluginInfo ? $this->___callPlugins('addClass', func_get_args(), $pluginInfo) : parent::addClass($class);
    }

    /**
     * {@inheritdoc}
     */
    public function removeClass($class)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'removeClass');
        return $pluginInfo ? $this->___callPlugins('removeClass', func_get_args(), $pluginInfo) : parent::removeClass($class);
    }

    /**
     * {@inheritdoc}
     */
    public function getEscapedValue($index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEscapedValue');
        return $pluginInfo ? $this->___callPlugins('getEscapedValue', func_get_args(), $pluginInfo) : parent::getEscapedValue($index);
    }

    /**
     * {@inheritdoc}
     */
    public function setRenderer(\Magento\Framework\Data\Form\Element\Renderer\RendererInterface $renderer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setRenderer');
        return $pluginInfo ? $this->___callPlugins('setRenderer', func_get_args(), $pluginInfo) : parent::setRenderer($renderer);
    }

    /**
     * {@inheritdoc}
     */
    public function getRenderer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRenderer');
        return $pluginInfo ? $this->___callPlugins('getRenderer', func_get_args(), $pluginInfo) : parent::getRenderer();
    }

    /**
     * {@inheritdoc}
     */
    public function getBeforeElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBeforeElementHtml');
        return $pluginInfo ? $this->___callPlugins('getBeforeElementHtml', func_get_args(), $pluginInfo) : parent::getBeforeElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getAfterElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAfterElementHtml');
        return $pluginInfo ? $this->___callPlugins('getAfterElementHtml', func_get_args(), $pluginInfo) : parent::getAfterElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getAfterElementJs()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAfterElementJs');
        return $pluginInfo ? $this->___callPlugins('getAfterElementJs', func_get_args(), $pluginInfo) : parent::getAfterElementJs();
    }

    /**
     * {@inheritdoc}
     */
    public function getLabelHtml($idSuffix = '', $scopeLabel = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabelHtml');
        return $pluginInfo ? $this->___callPlugins('getLabelHtml', func_get_args(), $pluginInfo) : parent::getLabelHtml($idSuffix, $scopeLabel);
    }

    /**
     * {@inheritdoc}
     */
    public function getHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtml');
        return $pluginInfo ? $this->___callPlugins('getHtml', func_get_args(), $pluginInfo) : parent::getHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function toHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toHtml');
        return $pluginInfo ? $this->___callPlugins('toHtml', func_get_args(), $pluginInfo) : parent::toHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function serialize($attributes = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($attributes, $valueSeparator, $fieldSeparator, $quote);
    }

    /**
     * {@inheritdoc}
     */
    public function getReadonly()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getReadonly');
        return $pluginInfo ? $this->___callPlugins('getReadonly', func_get_args(), $pluginInfo) : parent::getReadonly();
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlContainerId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlContainerId');
        return $pluginInfo ? $this->___callPlugins('getHtmlContainerId', func_get_args(), $pluginInfo) : parent::getHtmlContainerId();
    }

    /**
     * {@inheritdoc}
     */
    public function addElementValues($values, $overwrite = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addElementValues');
        return $pluginInfo ? $this->___callPlugins('addElementValues', func_get_args(), $pluginInfo) : parent::addElementValues($values, $overwrite);
    }

    /**
     * {@inheritdoc}
     */
    public function lock()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'lock');
        return $pluginInfo ? $this->___callPlugins('lock', func_get_args(), $pluginInfo) : parent::lock();
    }

    /**
     * {@inheritdoc}
     */
    public function isLocked()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isLocked');
        return $pluginInfo ? $this->___callPlugins('isLocked', func_get_args(), $pluginInfo) : parent::isLocked();
    }

    /**
     * {@inheritdoc}
     */
    public function addType($type, $className)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addType');
        return $pluginInfo ? $this->___callPlugins('addType', func_get_args(), $pluginInfo) : parent::addType($type, $className);
    }

    /**
     * {@inheritdoc}
     */
    public function getElements()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElements');
        return $pluginInfo ? $this->___callPlugins('getElements', func_get_args(), $pluginInfo) : parent::getElements();
    }

    /**
     * {@inheritdoc}
     */
    public function setReadonly($readonly, $useDisabled = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setReadonly');
        return $pluginInfo ? $this->___callPlugins('setReadonly', func_get_args(), $pluginInfo) : parent::setReadonly($readonly, $useDisabled);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldset($elementId, $config, $after = false, $isAdvanced = false)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldset');
        return $pluginInfo ? $this->___callPlugins('addFieldset', func_get_args(), $pluginInfo) : parent::addFieldset($elementId, $config, $after, $isAdvanced);
    }

    /**
     * {@inheritdoc}
     */
    public function addColumn($elementId, $config)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addColumn');
        return $pluginInfo ? $this->___callPlugins('addColumn', func_get_args(), $pluginInfo) : parent::addColumn($elementId, $config);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToArray(array $arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($arrAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function addCustomAttribute($key, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addCustomAttribute');
        return $pluginInfo ? $this->___callPlugins('addCustomAttribute', func_get_args(), $pluginInfo) : parent::addCustomAttribute($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function addData(array $arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addData');
        return $pluginInfo ? $this->___callPlugins('addData', func_get_args(), $pluginInfo) : parent::addData($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function setData($key, $value = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setData');
        return $pluginInfo ? $this->___callPlugins('setData', func_get_args(), $pluginInfo) : parent::setData($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function unsetData($key = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'unsetData');
        return $pluginInfo ? $this->___callPlugins('unsetData', func_get_args(), $pluginInfo) : parent::unsetData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getData($key = '', $index = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getData');
        return $pluginInfo ? $this->___callPlugins('getData', func_get_args(), $pluginInfo) : parent::getData($key, $index);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByPath($path)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByPath');
        return $pluginInfo ? $this->___callPlugins('getDataByPath', func_get_args(), $pluginInfo) : parent::getDataByPath($path);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataByKey($key)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataByKey');
        return $pluginInfo ? $this->___callPlugins('getDataByKey', func_get_args(), $pluginInfo) : parent::getDataByKey($key);
    }

    /**
     * {@inheritdoc}
     */
    public function setDataUsingMethod($key, $args = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('setDataUsingMethod', func_get_args(), $pluginInfo) : parent::setDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataUsingMethod($key, $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataUsingMethod');
        return $pluginInfo ? $this->___callPlugins('getDataUsingMethod', func_get_args(), $pluginInfo) : parent::getDataUsingMethod($key, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function hasData($key = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'hasData');
        return $pluginInfo ? $this->___callPlugins('hasData', func_get_args(), $pluginInfo) : parent::hasData($key);
    }

    /**
     * {@inheritdoc}
     */
    public function toArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toArray');
        return $pluginInfo ? $this->___callPlugins('toArray', func_get_args(), $pluginInfo) : parent::toArray($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toXml(array $keys = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toXml');
        return $pluginInfo ? $this->___callPlugins('toXml', func_get_args(), $pluginInfo) : parent::toXml($keys, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToXml(array $arrAttributes = [], $rootName = 'item', $addOpenTag = false, $addCdata = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToXml');
        return $pluginInfo ? $this->___callPlugins('convertToXml', func_get_args(), $pluginInfo) : parent::convertToXml($arrAttributes, $rootName, $addOpenTag, $addCdata);
    }

    /**
     * {@inheritdoc}
     */
    public function toJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toJson');
        return $pluginInfo ? $this->___callPlugins('toJson', func_get_args(), $pluginInfo) : parent::toJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function convertToJson(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToJson');
        return $pluginInfo ? $this->___callPlugins('convertToJson', func_get_args(), $pluginInfo) : parent::convertToJson($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function toString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toString');
        return $pluginInfo ? $this->___callPlugins('toString', func_get_args(), $pluginInfo) : parent::toString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, '__call');
        return $pluginInfo ? $this->___callPlugins('__call', func_get_args(), $pluginInfo) : parent::__call($method, $args);
    }

    /**
     * {@inheritdoc}
     */
    public function isEmpty()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isEmpty');
        return $pluginInfo ? $this->___callPlugins('isEmpty', func_get_args(), $pluginInfo) : parent::isEmpty();
    }

    /**
     * {@inheritdoc}
     */
    public function debug($data = null, &$objects = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'debug');
        return $pluginInfo ? $this->___callPlugins('debug', func_get_args(), $pluginInfo) : parent::debug($data, $objects);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetSet');
        return $pluginInfo ? $this->___callPlugins('offsetSet', func_get_args(), $pluginInfo) : parent::offsetSet($offset, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetExists');
        return $pluginInfo ? $this->___callPlugins('offsetExists', func_get_args(), $pluginInfo) : parent::offsetExists($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetUnset');
        return $pluginInfo ? $this->___callPlugins('offsetUnset', func_get_args(), $pluginInfo) : parent::offsetUnset($offset);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'offsetGet');
        return $pluginInfo ? $this->___callPlugins('offsetGet', func_get_args(), $pluginInfo) : parent::offsetGet($offset);
    }
}
