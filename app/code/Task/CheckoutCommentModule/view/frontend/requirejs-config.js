var config = {
    config: {
        mixins: {
            'Magento_Checkout/js/action/place-order': {
                'Task_CheckoutCommentModule/js/action/place-order-mixin': true
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
