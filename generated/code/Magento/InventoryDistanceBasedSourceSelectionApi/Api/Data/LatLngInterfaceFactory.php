<?php
namespace Magento\InventoryDistanceBasedSourceSelectionApi\Api\Data;

/**
 * Factory class for @see \Magento\InventoryDistanceBasedSourceSelectionApi\Api\Data\LatLngInterface
 */
class LatLngInterfaceFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\InventoryDistanceBasedSourceSelectionApi\\Api\\Data\\LatLngInterface')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\InventoryDistanceBasedSourceSelectionApi\Api\Data\LatLngInterface
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
