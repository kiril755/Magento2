<?php

namespace Task\CheckoutCommentModule\Model\ResourceModel\Comment;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\CheckoutCommentModule\Model\Comment;
use Task\CheckoutCommentModule\Model\ResourceModel\Comment as CommentResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(
            Comment::class,
            CommentResource::class
        );
    }
}

