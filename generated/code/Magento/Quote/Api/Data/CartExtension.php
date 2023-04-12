<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\CartInterface
 */
class CartExtension extends \Magento\Framework\Api\AbstractSimpleObject implements CartExtensionInterface
{
    /**
     * @return \Magento\Quote\Api\Data\ShippingAssignmentInterface[]|null
     */
    public function getShippingAssignments()
    {
        return $this->_get('shipping_assignments');
    }

    /**
     * @param \Magento\Quote\Api\Data\ShippingAssignmentInterface[] $shippingAssignments
     * @return $this
     */
    public function setShippingAssignments($shippingAssignments)
    {
        $this->setData('shipping_assignments', $shippingAssignments);
        return $this;
    }

    /**
     * @return string|null
     */
    public function getWishesField()
    {
        return $this->_get('wishes_field');
    }

    /**
     * @param string $wishesField
     * @return $this
     */
    public function setWishesField($wishesField)
    {
        $this->setData('wishes_field', $wishesField);
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
