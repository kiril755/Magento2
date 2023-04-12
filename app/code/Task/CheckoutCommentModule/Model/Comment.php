<?php

namespace Task\CheckoutCommentModule\Model;

use Magento\Framework\Model\AbstractModel;

class Comment extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Task\CheckoutCommentModule\Model\ResourceModel\Comment::class);
    }
}
