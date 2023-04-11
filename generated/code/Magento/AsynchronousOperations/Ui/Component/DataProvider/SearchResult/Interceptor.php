<?php
namespace Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult;

/**
 * Interceptor class for @see \Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult
 */
class Interceptor extends \Magento\AsynchronousOperations\Ui\Component\DataProvider\SearchResult implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Collection\EntityFactoryInterface $entityFactory, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Data\Collection\Db\FetchStrategyInterface $fetchStrategy, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\Authorization\Model\UserContextInterface $userContextInterface, \Magento\AsynchronousOperations\Model\StatusMapper $statusMapper, \Magento\AsynchronousOperations\Model\BulkStatus\CalculatedStatusSql $calculatedStatusSql, $mainTable = 'magento_bulk', $resourceModel = null, $identifierName = 'uuid')
    {
        $this->___init();
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $userContextInterface, $statusMapper, $calculatedStatusSql, $mainTable, $resourceModel, $identifierName);
    }

    /**
     * {@inheritdoc}
     */
    public function addFieldToFilter($field, $condition = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addFieldToFilter');
        return $pluginInfo ? $this->___callPlugins('addFieldToFilter', func_get_args(), $pluginInfo) : parent::addFieldToFilter($field, $condition);
    }

    /**
     * {@inheritdoc}
     */
    public function getCurPage($displacement = 0)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCurPage');
        return $pluginInfo ? $this->___callPlugins('getCurPage', func_get_args(), $pluginInfo) : parent::getCurPage($displacement);
    }
}
