define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (setShippingInformationAction) {
        return wrapper.wrap(setShippingInformationAction, function (originalAction) {
                var shippingAddressData = quote.shippingAddress();

                var wishField = $('input[name="extension_attributes[wish_field]"]').val();
                var commentField = $('input[name="extension_attributes[comment_field]"]').val();
                var extAttributes = shippingAddressData['extensionAttributes'];
                if (!extAttributes) {
                    extAttributes = {};
                }

                extAttributes.wish_field = wishField;
                extAttributes.comment_field = commentField;
                shippingAddressData['extensionAttributes'] = extAttributes;

                var result = originalAction();
                return result;
        });
    };
});
