<?php
namespace Magento\ImportExport\Model\Import;

/**
 * Interceptor class for @see \Magento\ImportExport\Model\Import
 */
class Interceptor extends \Magento\ImportExport\Model\Import implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Psr\Log\LoggerInterface $logger, \Magento\Framework\Filesystem $filesystem, \Magento\ImportExport\Helper\Data $importExportData, \Magento\Framework\App\Config\ScopeConfigInterface $coreConfig, \Magento\ImportExport\Model\Import\ConfigInterface $importConfig, \Magento\ImportExport\Model\Import\Entity\Factory $entityFactory, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\ImportExport\Model\Export\Adapter\CsvFactory $csvFactory, \Magento\Framework\HTTP\Adapter\FileTransferFactory $httpFactory, \Magento\MediaStorage\Model\File\UploaderFactory $uploaderFactory, \Magento\ImportExport\Model\Source\Import\Behavior\Factory $behaviorFactory, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\ImportExport\Model\History $importHistoryModel, \Magento\Framework\Stdlib\DateTime\DateTime $localeDate, array $data = [], ?\Magento\Framework\Message\ManagerInterface $messageManager = null, ?\Magento\Framework\Math\Random $random = null, ?\Magento\ImportExport\Model\Source\Upload $upload = null)
    {
        $this->___init();
        parent::__construct($logger, $filesystem, $importExportData, $coreConfig, $importConfig, $entityFactory, $importData, $csvFactory, $httpFactory, $uploaderFactory, $behaviorFactory, $indexerRegistry, $importHistoryModel, $localeDate, $data, $messageManager, $random, $upload);
    }

    /**
     * {@inheritdoc}
     */
    public function getOperationResultMessages(\Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $validationResult)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOperationResultMessages');
        return $pluginInfo ? $this->___callPlugins('getOperationResultMessages', func_get_args(), $pluginInfo) : parent::getOperationResultMessages($validationResult);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataSourceModel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataSourceModel');
        return $pluginInfo ? $this->___callPlugins('getDataSourceModel', func_get_args(), $pluginInfo) : parent::getDataSourceModel();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntity');
        return $pluginInfo ? $this->___callPlugins('getEntity', func_get_args(), $pluginInfo) : parent::getEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedEntitiesCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedEntitiesCount');
        return $pluginInfo ? $this->___callPlugins('getProcessedEntitiesCount', func_get_args(), $pluginInfo) : parent::getProcessedEntitiesCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedRowsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedRowsCount');
        return $pluginInfo ? $this->___callPlugins('getProcessedRowsCount', func_get_args(), $pluginInfo) : parent::getProcessedRowsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getWorkingDir()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getWorkingDir');
        return $pluginInfo ? $this->___callPlugins('getWorkingDir', func_get_args(), $pluginInfo) : parent::getWorkingDir();
    }

    /**
     * {@inheritdoc}
     */
    public function importSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importSource');
        return $pluginInfo ? $this->___callPlugins('importSource', func_get_args(), $pluginInfo) : parent::importSource();
    }

    /**
     * {@inheritdoc}
     */
    public function isImportAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImportAllowed');
        return $pluginInfo ? $this->___callPlugins('isImportAllowed', func_get_args(), $pluginInfo) : parent::isImportAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorAggregator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getErrorAggregator');
        return $pluginInfo ? $this->___callPlugins('getErrorAggregator', func_get_args(), $pluginInfo) : parent::getErrorAggregator();
    }

    /**
     * {@inheritdoc}
     */
    public function uploadSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadSource');
        return $pluginInfo ? $this->___callPlugins('uploadSource', func_get_args(), $pluginInfo) : parent::uploadSource();
    }

    /**
     * {@inheritdoc}
     */
    public function uploadFileAndGetSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'uploadFileAndGetSource');
        return $pluginInfo ? $this->___callPlugins('uploadFileAndGetSource', func_get_args(), $pluginInfo) : parent::uploadFileAndGetSource();
    }

    /**
     * {@inheritdoc}
     */
    public function validateSource(\Magento\ImportExport\Model\Import\AbstractSource $source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateSource');
        return $pluginInfo ? $this->___callPlugins('validateSource', func_get_args(), $pluginInfo) : parent::validateSource($source);
    }

    /**
     * {@inheritdoc}
     */
    public function invalidateIndex()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'invalidateIndex');
        return $pluginInfo ? $this->___callPlugins('invalidateIndex', func_get_args(), $pluginInfo) : parent::invalidateIndex();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityBehaviors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityBehaviors');
        return $pluginInfo ? $this->___callPlugins('getEntityBehaviors', func_get_args(), $pluginInfo) : parent::getEntityBehaviors();
    }

    /**
     * {@inheritdoc}
     */
    public function getUniqueEntityBehaviors()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUniqueEntityBehaviors');
        return $pluginInfo ? $this->___callPlugins('getUniqueEntityBehaviors', func_get_args(), $pluginInfo) : parent::getUniqueEntityBehaviors();
    }

    /**
     * {@inheritdoc}
     */
    public function isReportEntityType($entity = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isReportEntityType');
        return $pluginInfo ? $this->___callPlugins('isReportEntityType', func_get_args(), $pluginInfo) : parent::isReportEntityType($entity);
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getCreatedItemsCount', func_get_args(), $pluginInfo) : parent::getCreatedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getUpdatedItemsCount', func_get_args(), $pluginInfo) : parent::getUpdatedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getDeletedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDeletedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getDeletedItemsCount', func_get_args(), $pluginInfo) : parent::getDeletedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidatedIds() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidatedIds');
        return $pluginInfo ? $this->___callPlugins('getValidatedIds', func_get_args(), $pluginInfo) : parent::getValidatedIds();
    }

    /**
     * {@inheritdoc}
     */
    public function addLogComment($debugData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addLogComment');
        return $pluginInfo ? $this->___callPlugins('addLogComment', func_get_args(), $pluginInfo) : parent::addLogComment($debugData);
    }

    /**
     * {@inheritdoc}
     */
    public function getFormatedLogTrace()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getFormatedLogTrace');
        return $pluginInfo ? $this->___callPlugins('getFormatedLogTrace', func_get_args(), $pluginInfo) : parent::getFormatedLogTrace();
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
