<?php
namespace Magento\Inventory\Model\ResourceModel\SourceItem\DeleteMultiple;

/**
 * Interceptor class for @see \Magento\Inventory\Model\ResourceModel\SourceItem\DeleteMultiple
 */
class Interceptor extends \Magento\Inventory\Model\ResourceModel\SourceItem\DeleteMultiple implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resourceConnection)
    {
        $this->___init();
        parent::__construct($resourceConnection);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItems)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sourceItems);
    }
}
