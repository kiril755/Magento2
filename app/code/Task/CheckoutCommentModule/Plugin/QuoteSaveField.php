<?php
namespace Task\CheckoutCommentModule\Plugin;

class QuoteSaveField
{
    protected $cartRepository;

    public function __construct(
        \Magento\Quote\Api\CartRepositoryInterface $cartRepository
    ) {
        $this->cartRepository = $cartRepository;
    }

    public function beforeSaveAddressInformation(
        \Magento\Checkout\Api\ShippingInformationManagementInterface $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
        $quote = $this->cartRepository->getActive($cartId);
        $extensionAttributes = $addressInformation->getShippingAddress()->getExtensionAttributes();

        if ($extensionAttributes && $extensionAttributes->getWishField()) {
            $quote->setWishField($extensionAttributes->getWishField());
        }

        return [$cartId, $addressInformation];
    }
}
