<?php
namespace Magento\SalesRule\Model\Rule\Condition\Product;

/**
 * Interceptor class for @see \Magento\SalesRule\Model\Rule\Condition\Product
 */
class Interceptor extends \Magento\SalesRule\Model\Rule\Condition\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Rule\Model\Condition\Context $context, \Magento\Backend\Helper\Data $backendData, \Magento\Eav\Model\Config $config, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Magento\Catalog\Model\ResourceModel\Product $productResource, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\Collection $attrSetCollection, \Magento\Framework\Locale\FormatInterface $localeFormat, array $data = [], ?\Magento\Catalog\Model\ProductCategoryList $categoryList = null)
    {
        $this->___init();
        parent::__construct($context, $backendData, $config, $productFactory, $productRepository, $productResource, $attrSetCollection, $localeFormat, $data, $categoryList);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttribute() : string
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttribute');
        return $pluginInfo ? $this->___callPlugins('getAttribute', func_get_args(), $pluginInfo) : parent::getAttribute();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeName');
        return $pluginInfo ? $this->___callPlugins('getAttributeName', func_get_args(), $pluginInfo) : parent::getAttributeName();
    }

    /**
     * {@inheritdoc}
     */
    public function loadAttributeOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadAttributeOptions');
        return $pluginInfo ? $this->___callPlugins('loadAttributeOptions', func_get_args(), $pluginInfo) : parent::loadAttributeOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeElementHtml');
        return $pluginInfo ? $this->___callPlugins('getAttributeElementHtml', func_get_args(), $pluginInfo) : parent::getAttributeElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function setAttribute(string $value)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setAttribute');
        return $pluginInfo ? $this->___callPlugins('setAttribute', func_get_args(), $pluginInfo) : parent::setAttribute($value);
    }

    /**
     * {@inheritdoc}
     */
    public function loadArray($arr)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadArray');
        return $pluginInfo ? $this->___callPlugins('loadArray', func_get_args(), $pluginInfo) : parent::loadArray($arr);
    }

    /**
     * {@inheritdoc}
     */
    public function asArray(array $arrAttributes = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asArray');
        return $pluginInfo ? $this->___callPlugins('asArray', func_get_args(), $pluginInfo) : parent::asArray($arrAttributes);
    }

    /**
     * {@inheritdoc}
     */
    public function validate(\Magento\Framework\Model\AbstractModel $model)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validate');
        return $pluginInfo ? $this->___callPlugins('validate', func_get_args(), $pluginInfo) : parent::validate($model);
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementChooserUrl()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementChooserUrl');
        return $pluginInfo ? $this->___callPlugins('getValueElementChooserUrl', func_get_args(), $pluginInfo) : parent::getValueElementChooserUrl();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOperatorInputByType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultOperatorInputByType');
        return $pluginInfo ? $this->___callPlugins('getDefaultOperatorInputByType', func_get_args(), $pluginInfo) : parent::getDefaultOperatorInputByType();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeObject()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeObject');
        return $pluginInfo ? $this->___callPlugins('getAttributeObject', func_get_args(), $pluginInfo) : parent::getAttributeObject();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueOption($option = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueOption');
        return $pluginInfo ? $this->___callPlugins('getValueOption', func_get_args(), $pluginInfo) : parent::getValueOption($option);
    }

    /**
     * {@inheritdoc}
     */
    public function getValueSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueSelectOptions');
        return $pluginInfo ? $this->___callPlugins('getValueSelectOptions', func_get_args(), $pluginInfo) : parent::getValueSelectOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueAfterElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueAfterElementHtml');
        return $pluginInfo ? $this->___callPlugins('getValueAfterElementHtml', func_get_args(), $pluginInfo) : parent::getValueAfterElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeElement');
        return $pluginInfo ? $this->___callPlugins('getAttributeElement', func_get_args(), $pluginInfo) : parent::getAttributeElement();
    }

    /**
     * {@inheritdoc}
     */
    public function collectValidatedAttributes($productCollection)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'collectValidatedAttributes');
        return $pluginInfo ? $this->___callPlugins('collectValidatedAttributes', func_get_args(), $pluginInfo) : parent::collectValidatedAttributes($productCollection);
    }

    /**
     * {@inheritdoc}
     */
    public function getInputType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getInputType');
        return $pluginInfo ? $this->___callPlugins('getInputType', func_get_args(), $pluginInfo) : parent::getInputType();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementType');
        return $pluginInfo ? $this->___callPlugins('getValueElementType', func_get_args(), $pluginInfo) : parent::getValueElementType();
    }

    /**
     * {@inheritdoc}
     */
    public function getExplicitApply()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getExplicitApply');
        return $pluginInfo ? $this->___callPlugins('getExplicitApply', func_get_args(), $pluginInfo) : parent::getExplicitApply();
    }

    /**
     * {@inheritdoc}
     */
    public function getBindArgumentValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBindArgumentValue');
        return $pluginInfo ? $this->___callPlugins('getBindArgumentValue', func_get_args(), $pluginInfo) : parent::getBindArgumentValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getMappedSqlField()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMappedSqlField');
        return $pluginInfo ? $this->___callPlugins('getMappedSqlField', func_get_args(), $pluginInfo) : parent::getMappedSqlField();
    }

    /**
     * {@inheritdoc}
     */
    public function validateByEntityId($productId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateByEntityId');
        return $pluginInfo ? $this->___callPlugins('validateByEntityId', func_get_args(), $pluginInfo) : parent::validateByEntityId($productId);
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorForValidate()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorForValidate');
        return $pluginInfo ? $this->___callPlugins('getOperatorForValidate', func_get_args(), $pluginInfo) : parent::getOperatorForValidate();
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOperatorOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDefaultOperatorOptions');
        return $pluginInfo ? $this->___callPlugins('getDefaultOperatorOptions', func_get_args(), $pluginInfo) : parent::getDefaultOperatorOptions();
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
    public function getTablesToJoin()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTablesToJoin');
        return $pluginInfo ? $this->___callPlugins('getTablesToJoin', func_get_args(), $pluginInfo) : parent::getTablesToJoin();
    }

    /**
     * {@inheritdoc}
     */
    public function asXml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asXml');
        return $pluginInfo ? $this->___callPlugins('asXml', func_get_args(), $pluginInfo) : parent::asXml();
    }

    /**
     * {@inheritdoc}
     */
    public function loadXml($xml)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadXml');
        return $pluginInfo ? $this->___callPlugins('loadXml', func_get_args(), $pluginInfo) : parent::loadXml($xml);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeOptions');
        return $pluginInfo ? $this->___callPlugins('getAttributeOptions', func_get_args(), $pluginInfo) : parent::getAttributeOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeSelectOptions');
        return $pluginInfo ? $this->___callPlugins('getAttributeSelectOptions', func_get_args(), $pluginInfo) : parent::getAttributeSelectOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function loadOperatorOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadOperatorOptions');
        return $pluginInfo ? $this->___callPlugins('loadOperatorOptions', func_get_args(), $pluginInfo) : parent::loadOperatorOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorSelectOptions');
        return $pluginInfo ? $this->___callPlugins('getOperatorSelectOptions', func_get_args(), $pluginInfo) : parent::getOperatorSelectOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorName');
        return $pluginInfo ? $this->___callPlugins('getOperatorName', func_get_args(), $pluginInfo) : parent::getOperatorName();
    }

    /**
     * {@inheritdoc}
     */
    public function loadValueOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'loadValueOptions');
        return $pluginInfo ? $this->___callPlugins('loadValueOptions', func_get_args(), $pluginInfo) : parent::loadValueOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueParsed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueParsed');
        return $pluginInfo ? $this->___callPlugins('getValueParsed', func_get_args(), $pluginInfo) : parent::getValueParsed();
    }

    /**
     * {@inheritdoc}
     */
    public function isArrayOperatorType()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isArrayOperatorType');
        return $pluginInfo ? $this->___callPlugins('isArrayOperatorType', func_get_args(), $pluginInfo) : parent::isArrayOperatorType();
    }

    /**
     * {@inheritdoc}
     */
    public function getValue()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValue');
        return $pluginInfo ? $this->___callPlugins('getValue', func_get_args(), $pluginInfo) : parent::getValue();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueName');
        return $pluginInfo ? $this->___callPlugins('getValueName', func_get_args(), $pluginInfo) : parent::getValueName();
    }

    /**
     * {@inheritdoc}
     */
    public function getNewChildSelectOptions()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewChildSelectOptions');
        return $pluginInfo ? $this->___callPlugins('getNewChildSelectOptions', func_get_args(), $pluginInfo) : parent::getNewChildSelectOptions();
    }

    /**
     * {@inheritdoc}
     */
    public function getNewChildName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewChildName');
        return $pluginInfo ? $this->___callPlugins('getNewChildName', func_get_args(), $pluginInfo) : parent::getNewChildName();
    }

    /**
     * {@inheritdoc}
     */
    public function asHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asHtml');
        return $pluginInfo ? $this->___callPlugins('asHtml', func_get_args(), $pluginInfo) : parent::asHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function asHtmlRecursive()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asHtmlRecursive');
        return $pluginInfo ? $this->___callPlugins('asHtmlRecursive', func_get_args(), $pluginInfo) : parent::asHtmlRecursive();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeElement');
        return $pluginInfo ? $this->___callPlugins('getTypeElement', func_get_args(), $pluginInfo) : parent::getTypeElement();
    }

    /**
     * {@inheritdoc}
     */
    public function getTypeElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTypeElementHtml');
        return $pluginInfo ? $this->___callPlugins('getTypeElementHtml', func_get_args(), $pluginInfo) : parent::getTypeElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorElement');
        return $pluginInfo ? $this->___callPlugins('getOperatorElement', func_get_args(), $pluginInfo) : parent::getOperatorElement();
    }

    /**
     * {@inheritdoc}
     */
    public function getOperatorElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperatorElementHtml');
        return $pluginInfo ? $this->___callPlugins('getOperatorElementHtml', func_get_args(), $pluginInfo) : parent::getOperatorElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementRenderer()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementRenderer');
        return $pluginInfo ? $this->___callPlugins('getValueElementRenderer', func_get_args(), $pluginInfo) : parent::getValueElementRenderer();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElement');
        return $pluginInfo ? $this->___callPlugins('getValueElement', func_get_args(), $pluginInfo) : parent::getValueElement();
    }

    /**
     * {@inheritdoc}
     */
    public function getValueElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValueElementHtml');
        return $pluginInfo ? $this->___callPlugins('getValueElementHtml', func_get_args(), $pluginInfo) : parent::getValueElementHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getAddLinkHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAddLinkHtml');
        return $pluginInfo ? $this->___callPlugins('getAddLinkHtml', func_get_args(), $pluginInfo) : parent::getAddLinkHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getRemoveLinkHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRemoveLinkHtml');
        return $pluginInfo ? $this->___callPlugins('getRemoveLinkHtml', func_get_args(), $pluginInfo) : parent::getRemoveLinkHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function getChooserContainerHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getChooserContainerHtml');
        return $pluginInfo ? $this->___callPlugins('getChooserContainerHtml', func_get_args(), $pluginInfo) : parent::getChooserContainerHtml();
    }

    /**
     * {@inheritdoc}
     */
    public function asString($format = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asString');
        return $pluginInfo ? $this->___callPlugins('asString', func_get_args(), $pluginInfo) : parent::asString($format);
    }

    /**
     * {@inheritdoc}
     */
    public function asStringRecursive($level = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'asStringRecursive');
        return $pluginInfo ? $this->___callPlugins('asStringRecursive', func_get_args(), $pluginInfo) : parent::asStringRecursive($level);
    }

    /**
     * {@inheritdoc}
     */
    public function validateAttribute($validatedValue)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateAttribute');
        return $pluginInfo ? $this->___callPlugins('validateAttribute', func_get_args(), $pluginInfo) : parent::validateAttribute($validatedValue);
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
    public function convertToArray(array $keys = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'convertToArray');
        return $pluginInfo ? $this->___callPlugins('convertToArray', func_get_args(), $pluginInfo) : parent::convertToArray($keys);
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
    public function serialize($keys = [], $valueSeparator = '=', $fieldSeparator = ' ', $quote = '"')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'serialize');
        return $pluginInfo ? $this->___callPlugins('serialize', func_get_args(), $pluginInfo) : parent::serialize($keys, $valueSeparator, $fieldSeparator, $quote);
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
