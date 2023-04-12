<?php

namespace Task\CheckoutCommentModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Comment extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('task_product_comment', 'id');
    }
}
