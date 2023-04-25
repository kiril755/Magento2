// define([
//     'jquery'
// ], function ($) {
//     'use strict';
//
//     return function () {
//         // var productId = config.productId,
//         //     priceUrl = config.priceUrl;
//
//         $(document).on('click', '.show-price-btn', function() {
//             var productId = $(this).data('product-id');
//             console.log('hello')
//             $.ajax({
//                 url: '/price_request/ajax/showprice',
//                 type: 'POST',
//                 data: {
//                     product_id: productId
//                 },
//                 success: function(response) {
//                     $('.product-info-main .price-box .price').text(response.price);
//                     $('.product-info-main .add-to-cart-buttons').show();
//                     $('.show-price-btn').hide();
//                 }
//             });
//         });
//     };
// });
