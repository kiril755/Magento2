<?php
namespace Magento\Inventory\Model\SourceItem\Command\SourceItemsDelete;

/**
 * Interceptor class for @see \Magento\Inventory\Model\SourceItem\Command\SourceItemsDelete
 */
class Interceptor extends \Magento\Inventory\Model\SourceItem\Command\SourceItemsDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\ResourceModel\SourceItem\DeleteMultiple $deleteMultiple, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($deleteMultiple, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItems) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sourceItems);
    }
}
