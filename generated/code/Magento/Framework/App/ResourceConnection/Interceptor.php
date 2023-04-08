<?php
namespace Magento\Framework\App\ResourceConnection;

/**
 * Interceptor class for @see \Magento\Framework\App\ResourceConnection
 */
class Interceptor extends \Magento\Framework\App\ResourceConnection implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection\ConfigInterface $resourceConfig, \Magento\Framework\Model\ResourceModel\Type\Db\ConnectionFactoryInterface $connectionFactory, \Magento\Framework\App\DeploymentConfig $deploymentConfig, $tablePrefix = '')
    {
        $this->___init();
        parent::__construct($resourceConfig, $connectionFactory, $deploymentConfig, $tablePrefix);
    }

    /**
     * {@inheritdoc}
     */
    public function getTableName($modelEntity, $connectionName = 'default')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getTableName');
        return $pluginInfo ? $this->___callPlugins('getTableName', func_get_args(), $pluginInfo) : parent::getTableName($modelEntity, $connectionName);
    }
}
