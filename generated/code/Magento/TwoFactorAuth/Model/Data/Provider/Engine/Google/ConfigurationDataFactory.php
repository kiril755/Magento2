<?php
namespace Magento\TwoFactorAuth\Model\Data\Provider\Engine\Google;

/**
 * Factory class for @see \Magento\TwoFactorAuth\Model\Data\Provider\Engine\Google\ConfigurationData
 */
class ConfigurationDataFactory
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
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager, $instanceName = '\\Magento\\TwoFactorAuth\\Model\\Data\\Provider\\Engine\\Google\\ConfigurationData')
    {
        $this->_objectManager = $objectManager;
        $this->_instanceName = $instanceName;
    }

    /**
     * Create class instance with specified parameters
     *
     * @param array $data
     * @return \Magento\TwoFactorAuth\Model\Data\Provider\Engine\Google\ConfigurationData
     */
    public function create(array $data = [])
    {
        return $this->_objectManager->create($this->_instanceName, $data);
    }
}
