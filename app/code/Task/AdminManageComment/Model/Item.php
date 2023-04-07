<?php

namespace Task\AdminManageComment\Model;

use Magento\Framework\Model\AbstractModel;

class Item extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Task\AdminManageComment\Model\ResourceModel\Item::class);
    }
}
