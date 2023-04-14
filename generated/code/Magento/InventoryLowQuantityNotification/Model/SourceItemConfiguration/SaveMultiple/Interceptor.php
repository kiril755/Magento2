<?php
namespace Magento\InventoryLowQuantityNotification\Model\SourceItemConfiguration\SaveMultiple;

/**
 * Interceptor class for @see \Magento\InventoryLowQuantityNotification\Model\SourceItemConfiguration\SaveMultiple
 */
class Interceptor extends \Magento\InventoryLowQuantityNotification\Model\SourceItemConfiguration\SaveMultiple implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\InventoryLowQuantityNotification\Model\ResourceModel\SourceItemConfiguration\SaveMultiple $saveMultipleResourceModel, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($saveMultipleResourceModel, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItemConfigurations) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sourceItemConfigurations);
    }
}
