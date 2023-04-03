<?php

namespace Task\AdvancedCommentManagement\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Task\AdvancedCommentManagement\Model\ResourceModel\Item::class);
    }
}
