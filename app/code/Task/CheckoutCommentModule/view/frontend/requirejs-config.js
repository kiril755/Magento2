var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/set-shipping-information': {
                'Task_CheckoutCommentModule/js/action/set-shipping-information-mixin': true
            }
        }
    },
    // map: {
    //     '*': {
    //         'placeOrderMixin': 'Task_CheckoutCommentModule/js/action/place-order-mixin'
    //     }
    // },
    shim: {
        'knockoutjs/knockout': {
            exports: 'ko'
        },
        'Task_CheckoutCommentModule/comment': {
            deps: ['ko']
        }
    }
};
