require(['jquery'], function ($) {
    $(document).on('click', '.show-price-btn', function () {
        var productId = $(this).data('product-id');
        $.ajax({
            url: '/price_request/ajax/showprice',
            type: 'POST',
            dataType: 'json',
            delay: 100,
            params: {
                contentType: 'application/json; charset=utf-8'
            },
            data: {
                product_id: productId
            },
            success: function (response) {
                if (response.price) {
                    $('.product-info-main .product-info-price').text('$' + response.price);
                    $('.show-price-btn').hide();
                } else {
                    alert(response.error);
                }
            }
        });
    });
});
