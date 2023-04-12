var config = {
    map: {
        '*': {
            ko: 'knockoutjs/knockout'
        }
    },
    shim: {
        'knockoutjs/knockout': {
            exports: 'ko'
        },
        'Task_CheckoutCommentModule/comment': {
            deps: ['ko']
        }
    }
};
