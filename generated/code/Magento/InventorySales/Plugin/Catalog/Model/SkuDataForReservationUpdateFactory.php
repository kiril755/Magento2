<?php
namespace Magento\InventorySales\Plugin\Catalog\Model;

/**
 * Factory class for @see \Magento\InventorySales\Plugin\Catalog\Model\SkuDataForReservationUpdate
 */
class SkuDataForReservationUpdateFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\InventorySales\\Plugin\\Catalog\\Model\\SkuDataForReservationUpdate')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\InventorySales\Plugin\Catalog\Model\SkuDataForReservationUpdate
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
