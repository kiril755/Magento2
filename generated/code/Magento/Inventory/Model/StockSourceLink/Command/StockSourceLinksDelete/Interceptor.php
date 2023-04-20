<?php
namespace Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksDelete;

/**
 * Interceptor class for @see \Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksDelete
 */
class Interceptor extends \Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\ResourceModel\StockSourceLink\DeleteMultiple $deleteMultiple, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($deleteMultiple, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(array $links) : void
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($links);
    }
}
