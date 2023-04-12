define([
    'uiComponent',
    'jquery',
    'ko'
], function (Component, $, ko) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'Task_CheckoutCommentModule/comment-tmp'
        },

        comments: ko.observableArray([]),

        initialize: function () {
            this._super();
            this.loadComments();
        },

        loadComments: function () {
            console.log('Loading comments...');
            var self = this;

            $.ajax({
                url: 'https://app.magento2.test/backend/task_comment/index',
                type: 'GET',
                dataType: 'json',
                cache: true,
                success: function (response) {
                    self.setComments(response);
                },
                error: function(xhr, status, error) {
                    console.error('Error loading comments:', error);
                }
            });
        },

        setComments: function(response) {
            console.log('Setting comments:', response);
            this.comments.valueWillMutate();
            response.forEach(function(comment) {
                this.comments.push(comment);
            }, this);
            this.comments.valueHasMutated();
        }
    });
});
