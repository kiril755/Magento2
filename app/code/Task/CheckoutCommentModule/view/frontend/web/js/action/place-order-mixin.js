define([
    'jquery',
    'mage/utils/wrapper',
    'Magento_Checkout/js/model/quote'
], function ($, wrapper, quote) {
    'use strict';

    return function (placeOrderAction) {
        console.log(quote)
        return wrapper.wrap(placeOrderAction, function (originalAction) {
            return originalAction().done(function () {
                var wishField = $('input[name="wish_field"]').val();
                if (wishField) {
                    quote.extension_attributes = quote.extension_attributes || {};
                    quote.extension_attributes.wish_field = wishField;
                    quote.save();
                }
            });
        });
    };
});
