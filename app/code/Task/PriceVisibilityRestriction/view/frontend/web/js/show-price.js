"use strict";
define(['jquery','domReady!'], function ($) {
    return function (config, element){
        $(element).on('click', function () {
            const url = '/price_request/ajax/showprice';
            const priceDiv = $('<div>').addClass('price');
            $(element).attr('disabled', true);
            const addToCartTemplate = '<div class="box-tocart"">\n' +
                '            <div class="fieldset">\n' +
                '                <div class="field qty">\n' +
                '                    <label class="label" for="qty"><span>Qty</span></label>\n' +
                '                    <div class="control">\n' +
                '                        <input type="number" name="qty" id="qty" min="0" value="1" title="Qty" class="input-text qty" data-validate="{&quot;required-number&quot;:true,&quot;validate-item-quantity&quot;:{&quot;maxAllowed&quot;:10000}}">\n' +
                '                    </div>\n' +
                '                </div>\n' +
                '                <div class="actions">\n' +
                '                    <button type="submit" title="Add to Cart" class="action primary tocart" id="product-addtocart-button">\n' +
                '                        <span>Add to Cart</span>\n' +
                '                    </button>\n' +
                '\n' +
                '                    <div id="instant-purchase" data-bind="scope:\'instant-purchase\'">\n' +
                '                        <!-- ko template: getTemplate() -->\n' +
                '                        <!-- ko if: showButton() --><!-- /ko -->\n' +
                '                        <!-- /ko -->\n' +
                '                    </div>\n' +
                '\n' +
                '                </div>\n' +
                '            </div>\n' +
                '        </div>';
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
                    if (response.price) {
                        $('.product-info-stock-sku').before(priceDiv.text(config.currency + parseFloat(response.price).toFixed(2)));
                        $(element).after(addToCartTemplate);
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
