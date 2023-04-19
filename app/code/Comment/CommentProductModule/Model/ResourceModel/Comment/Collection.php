<?php

namespace Comment\CommentProductModule\Model\ResourceModel\Comment;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Comment\CommentProductModule\Model\Comment;
use Comment\CommentProductModule\Model\ResourceModel\Comment as CommentResource;

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

