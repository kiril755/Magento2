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
                var commentField = $('input[name="extension_attributes[comment_field]"]').val();
                var extAttributes = quote.extension_attributes;
                if (!extAttributes) {
                    extAttributes = {};
                }
                extAttributes.wish_field = wishField;
                extAttributes.comment_field = commentField;
                quote.extension_attributes = extAttributes;
            });
        });
    };
});
