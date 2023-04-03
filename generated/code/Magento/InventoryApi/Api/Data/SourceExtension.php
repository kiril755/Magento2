<?php
namespace Magento\InventoryApi\Api\Data;

/**
 * Extension class for @see \Magento\InventoryApi\Api\Data\SourceInterface
 */
class SourceExtension extends \Magento\Framework\Api\AbstractSimpleObject implements SourceExtensionInterface
{
    /**
     * @return boolean|null
     */
    public function getIsPickupLocationActive()
    {
        return $this->_get('is_pickup_location_active');
    }

    /**
     * @param boolean $isPickupLocationActive
     * @return $this
     */
    public function setIsPickupLocationActive($isPickupLocationActive)
    {
        $this->setData('is_pickup_location_active', $isPickupLocationActive);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrontendName()
    {
        return $this->_get('frontend_name');
    }

    /**
     * @param string $frontendName
     * @return $this
     */
    public function setFrontendName($frontendName)
    {
        $this->setData('frontend_name', $frontendName);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFrontendDescription()
    {
        return $this->_get('frontend_description');
    }

    /**
     * @param string $frontendDescription
     * @return $this
     */
    public function setFrontendDescription($frontendDescription)
    {
        $this->setData('frontend_description', $frontendDescription);
        return $this;
    }
}
