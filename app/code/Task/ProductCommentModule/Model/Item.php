<?php

namespace Task\ProductCommentModule\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Task\ProductCommentModel\Model\ResourceModel\Item::class);
    }
}
