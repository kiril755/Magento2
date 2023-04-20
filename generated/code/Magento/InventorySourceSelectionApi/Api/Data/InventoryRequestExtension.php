<?php
namespace Magento\InventorySourceSelectionApi\Api\Data;

/**
 * Extension class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
 */
class InventoryRequestExtension extends \Magento\Framework\Api\AbstractSimpleObject implements InventoryRequestExtensionInterface
{
    /**
     * @return \Magento\InventorySourceSelectionApi\Api\Data\AddressInterface|null
     */
    public function getDestinationAddress()
    {
        return $this->_get('destination_address');
    }

    /**
     * @param \Magento\InventorySourceSelectionApi\Api\Data\AddressInterface $destinationAddress
     * @return $this
     */
    public function setDestinationAddress(\Magento\InventorySourceSelectionApi\Api\Data\AddressInterface $destinationAddress)
    {
        $this->setData('destination_address', $destinationAddress);
        return $this;
    }
}
