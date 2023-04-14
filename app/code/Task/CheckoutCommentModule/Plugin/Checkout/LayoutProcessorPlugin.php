<?php
namespace Task\CheckoutCommentModule\Plugin;

use Magento\Quote\Api\Data\AddressInterface;
use Magento\Quote\Api\Data\CartInterface;

class LayoutProcessorPlugin
{
    public function afterProcess(
        \Magento\Checkout\Block\Checkout\LayoutProcessor $subject,
        array $jsLayout
    ) {
        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']
        ['shipping-address-fieldset']['children']['wish_field'] = [
            'component' => 'Magento_Ui/js/form/element/textarea',
            'dataScope' => 'shippingAddress.custom_attributes.wish_field',
            'provider' => 'checkoutProvider',
            'sortOrder' => 0,
            'label' => 'Wish Field',
            'validation' => [
                'required-entry' => true
            ],
            'options' => [],
            'visible' => true,
        ];
        return $jsLayout;
    }
}
