<?php
namespace Magento\InventoryInStorePickupApi\Api\Data\SearchRequest;

/**
 * Factory class for @see \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoExtension
 */
class ProductInfoExtensionFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\InventoryInStorePickupApi\\Api\\Data\\SearchRequest\\ProductInfoExtension')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\InventoryInStorePickupApi\Api\Data\SearchRequest\ProductInfoExtension
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
