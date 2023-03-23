<?php
namespace Magento\InventoryApi\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\InventoryApi\Api\Data\SourceInterface
 */
interface SourceExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return boolean|null
     */
    public function getIsPickupLocationActive();

    /**
     * @param boolean $isPickupLocationActive
     * @return $this
     */
    public function setIsPickupLocationActive($isPickupLocationActive);

    /**
     * @return string|null
     */
    public function getFrontendName();

    /**
     * @param string $frontendName
     * @return $this
     */
    public function setFrontendName($frontendName);

    /**
     * @return string|null
     */
    public function getFrontendDescription();

    /**
     * @param string $frontendDescription
     * @return $this
     */
    public function setFrontendDescription($frontendDescription);
}
