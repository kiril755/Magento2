define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (placeOrderAction) {
        return wrapper.wrap(placeOrderAction, function (originalAction) {
            return originalAction().done(function () {
                var wishField = $('input[name="extension_attributes[wish_field]"]').val();
                var extAttributes = quote.extension_attributes;
                if (!extAttributes) {
                    extAttributes = {};
                }
                extAttributes.wish_field = wishField;
                quote.extension_attributes = extAttributes;
            });
        });
    };
});
