<?php

namespace Task\AdvancedCommentManagement\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Task\AdvancedCommentManagement\Model\Item;
use Task\AdvancedCommentManagement\Model\ResourceModel\Item as ItemResource;

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

