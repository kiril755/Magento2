<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree\Wrapper;

/**
 * Factory class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree\Wrapper\NodeWrapper
 */
class NodeWrapperFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\CatalogGraphQl\\Model\\Resolver\\Products\\DataProvider\\CategoryTree\\Wrapper\\NodeWrapper')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\CategoryTree\Wrapper\NodeWrapper
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
