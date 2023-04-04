<?php
namespace Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksSave;

/**
 * Interceptor class for @see \Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksSave
 */
class Interceptor extends \Magento\Inventory\Model\StockSourceLink\Command\StockSourceLinksSave implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Inventory\Model\StockSourceLink\Validator\StockSourceLinksValidator $stockSourceLinksValidator, \Magento\Inventory\Model\ResourceModel\StockSourceLink\SaveMultiple $saveMultiple, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($stockSourceLinksValidator, $saveMultiple, $logger);
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
