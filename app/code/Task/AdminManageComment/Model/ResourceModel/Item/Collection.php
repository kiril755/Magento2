<?php

namespace Task\AdminManageComment\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\AdminManageComment\Model\Item;
use Task\AdminManageComment\Model\ResourceModel\Item as ItemResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(
            Item::class,
            ItemResource::class
        );
    }
}

