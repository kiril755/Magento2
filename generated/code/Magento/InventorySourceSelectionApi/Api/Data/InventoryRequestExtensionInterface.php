<?php
namespace Magento\InventorySourceSelectionApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\InventorySourceSelectionApi\Api\Data\InventoryRequestInterface
 */
interface InventoryRequestExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\InventorySourceSelectionApi\Api\Data\AddressInterface|null
     */
    public function getDestinationAddress();

    /**
     * @param \Magento\InventorySourceSelectionApi\Api\Data\AddressInterface $destinationAddress
     * @return $this
     */
    public function setDestinationAddress(\Magento\InventorySourceSelectionApi\Api\Data\AddressInterface $destinationAddress);
}
