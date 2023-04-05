<?php
namespace Magento\Inventory\Model\ResourceModel\IsProductAssignedToStock;

/**
 * Interceptor class for @see \Magento\Inventory\Model\ResourceModel\IsProductAssignedToStock
 */
class Interceptor extends \Magento\Inventory\Model\ResourceModel\IsProductAssignedToStock implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\ResourceConnection $resource)
    {
        $this->___init();
        parent::__construct($resource);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(string $sku, int $stockId) : bool
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($sku, $stockId);
    }
}
