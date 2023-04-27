<?php
namespace Magento\Checkout\Api\Data;

/**
 * Extension class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
class ShippingInformationExtension extends \Magento\Framework\Api\AbstractSimpleObject implements ShippingInformationExtensionInterface
{
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