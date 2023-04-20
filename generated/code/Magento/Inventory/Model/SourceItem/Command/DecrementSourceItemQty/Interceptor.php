<?php
namespace Magento\Inventory\Model\SourceItem\Command\DecrementSourceItemQty;

/**
 * Interceptor class for @see \Magento\Inventory\Model\SourceItem\Command\DecrementSourceItemQty
 */
class Interceptor extends \Magento\Inventory\Model\SourceItem\Command\DecrementSourceItemQty implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\SourceItem\Validator\SourceItemsValidator $sourceItemsValidator, \Magento\Inventory\Model\ResourceModel\SourceItem\DecrementQtyForMultipleSourceItem $decrementSourceItem, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($sourceItemsValidator, $decrementSourceItem, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $sourceItemDecrementData) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sourceItemDecrementData);
    }
}
