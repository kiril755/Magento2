<?php

namespace Task\ProductCommentModule\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\ProductCommentModule\Model\Item;
use Task\ProductCommentModule\Model\ResourceModel\Item as ItemResource;

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

