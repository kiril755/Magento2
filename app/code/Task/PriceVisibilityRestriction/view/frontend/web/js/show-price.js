"use strict";
define(['jquery','domReady!'], function ($) {
    return function (config, element){
        $(element).on('click', function () {
            const url = '/price_request/ajax/showprice';
            const priceDiv = $('<div>').addClass('price');
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                delay: 100,
                params: {
                    contentType: 'application/json; charset=utf-8'
                },
                data: {
                    product_id: config.productId
                },
                success: function (response) {
                    console.log(response)
                    if (response.price) {
                        $('.product-info-stock-sku').before(priceDiv.text(config.currency + parseFloat(response.price).toFixed(2)));
                        // $('.product-info-main .product-info-price').text(config.currency + response.price);
                        $(element).hide();
                    } else {
                        console.log(response.error);
                    }
                },
                error: function (error) {
                    console.log("An error occurred: " + error);
                }
            });
        });
    }
});
