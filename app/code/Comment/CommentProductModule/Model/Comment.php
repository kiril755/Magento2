<?php

namespace Comment\CommentProductModule\Model;

use Magento\Framework\Model\AbstractModel;

class Comment extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Comment\CommentProductModule\Model\ResourceModel\Comment::class);
    }
}

