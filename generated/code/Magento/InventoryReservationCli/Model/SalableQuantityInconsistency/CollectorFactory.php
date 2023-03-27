<?php
namespace Magento\InventoryReservationCli\Model\SalableQuantityInconsistency;

/**
 * Factory class for @see \Magento\InventoryReservationCli\Model\SalableQuantityInconsistency\Collector
 */
class CollectorFactory
{
    /**
     * Object Manager instance
     *
     * @var \Magento\Framework\ObjectManagerInterface
     */
    protected $_objectManager = null;

    /**
     * Instance name to create
     *
     * @var string
     */
    protected $_instanceName = null;

    /**
     * Factory constructor
     *
     * @param \Magento\Framework\ObjectManagerInterface $objectManager
     * @param string $instanceName
     */
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\InventoryReservationCli\\Model\\SalableQuantityInconsistency\\Collector')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\InventoryReservationCli\Model\SalableQuantityInconsistency\Collector
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
