<?php

namespace Task\ProductCommentModule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Item extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('task_product_comment', 'id');
    }
}
