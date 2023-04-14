<?php
namespace Magento\Checkout\Api\Data;

/**
 * ExtensionInterface class for @see \Magento\Checkout\Api\Data\ShippingInformationInterface
 */
interface ShippingInformationExtensionInterface extends \Magento\Framework\Api\ExtensionAttributesInterface
{
    /**
     * @return string|null
     */
    public function getWishField();

    /**
     * @param string $wishField
     * @return $this
     */
    public function setWishField($wishField);

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
