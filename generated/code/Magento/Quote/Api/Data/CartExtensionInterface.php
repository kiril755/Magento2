<?php
namespace Magento\Quote\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Quote\Api\Data\CartInterface
 */
interface CartExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments();

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments);

    /**
     * @return string|null
     */
    public function getWishesField();

    /**
     * @param string $wishesField
     * @return $this
     */
    public function setWishesField($wishesField);

    /**
     * @return string|null
     */
    public function getCommentField();

    /**
     * @param string $commentField
     * @return $this
     */
    public function setCommentField($commentField);
}
