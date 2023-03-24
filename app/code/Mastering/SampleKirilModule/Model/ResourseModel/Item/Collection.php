<?php

namespace Mastering\SampleKirilModule\Model\ResourceModel\Item;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Mastering\SampleKirilModule\Model\Item;
use Mastering\SampleKirilModule\Model\ResourceModel\Item as ItemResource;

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
