<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\AddressInterface
 */
class AddressExtension extends \Magento\Framework\Api\AbstractSimpleObject implements AddressExtensionInterface
{
    /**
     * @return string|null
     */
    public function getPickupLocationCode()
    {
        return $this->_get('pickup_location_code');
    }

    /**
     * @param string $pickupLocationCode
     * @return $this
     */
    public function setPickupLocationCode($pickupLocationCode)
    {
        $this->setData('pickup_location_code', $pickupLocationCode);
        return $this;
    }

    /**
     * @return \Magento\SalesRule\Api\Data\RuleDiscountInterface[]|null
     */
    public function getDiscounts()
    {
        return $this->_get('discounts');
    }

    /**
     * @param \Magento\SalesRule\Api\Data\RuleDiscountInterface[] $discounts
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->setData('discounts', $discounts);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWishField()
    {
        return $this->_get('wish_field');
    }

    /**
     * @param string $wishField
     * @return $this
     */
    public function setWishField($wishField)
    {
        $this->setData('wish_field', $wishField);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCommentField()
    {
        return $this->_get('comment_field');
    }

    /**
     * @param string $commentField
     * @return $this
     */
    public function setCommentField($commentField)
    {
        $this->setData('comment_field', $commentField);
        return $this;
    }
}
